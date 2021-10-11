<?php

namespace App\Http\Livewire\Movies;

use App\Models\Movie;
use Livewire\Component;
use Livewire\WithPagination;

class Favorites extends Component
{
    use WithPagination;
    private $movies;
    public $favorites_ids;
    public $server_message      = '';
    public $search              = '';
    public $pp                  = 1;
    public function boot()
    {
        $page_movies            = intval($this->pp);
        $this->favorites_ids    = auth()->user()->movies->pluck('mid')->toArray();
        $this->movies           = Movie::query()->whereIn('mid', $this->favorites_ids)->paginate($page_movies);
    }

    public function favorite($movie_id)
    {
        $movie      = Movie::firstOrCreate([
            'mid'   => $movie_id,
        ]);
        $movie->movie_data  = $this->movie;
        $movie->save();

        if(in_array($movie_id, $this->favorites_ids))
        {
            //remove from favorites
            unset($this->favorites_ids[array_search($movie_id, $this->favorites_ids)]);
            $this->server_message   = "Movie removed from favorites";
        }
        else
        {
            //add to favorites
            array_push($this->favorites_ids, $movie_id);
            $this->server_message   = "Movie added to favorites";

        }

        auth()->user()->movies()->sync(Movie::query()->whereIn('mid', $this->favorites_ids)->pluck('id'));
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingPp()
    {
        $this->resetPage();
    }

    public function render()
    {
        $page_movies    = intval($this->pp);
        return view('livewire.movies.favorites', [
            'movies'    => Movie::query()->where('movie_data', 'like', '%'.$this->search.'%')->whereIn('mid', $this->favorites_ids)->paginate($page_movies),
        ]);
    }
}
