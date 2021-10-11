<?php

namespace App\Http\Livewire\Movies;

use App\Models\Movie;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Search extends Component
{
    public $q           = '';
    public $movie;
    public $favorited   = false;
    public $favorites_ids;
    public $server_message = '';
    public function boot()
    {
        $this->isFavorited();
        $this->searchService();
        $this->favorites_ids = auth()->user()->movies->pluck('mid')->toArray();
    }

    public function search()
    {
        return $this->searchService();
    }

    public function searchService()
    {
        if(trim($this->q) != '')
        {
            $response = Http::get(config('movies.url')."&t=".trim($this->q));
            if($response->successful())
            {
                $this->movie   =  $response->json();
            }
        }
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

    public function isFavorited()
    {
        try
        {
            if(in_array($this->movie['imdbID'], $this->favorites_ids))
            {
                $this->favorited   = true;
            }
            else
            {
                $this->favorited   = false;
            }
        }catch (\Exception $e) {}
    }

    public function render()
    {
        return view('livewire.movies.search');
    }
}
