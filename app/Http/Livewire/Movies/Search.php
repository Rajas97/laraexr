<?php

namespace App\Http\Livewire\Movies;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Search extends Component
{
    public $q       = '';
    public $movies;
    public function boot()
    {
        $this->searchService();
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
                $this->movies   =  $response->json();
            }
        }
    }

    public function render()
    {
        return view('livewire.movies.search');
    }
}
