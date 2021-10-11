<div>
    @if ($server_message != '')
        <div class="max-w-lg mx-auto pt-7">
            <div class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-yellow-700" role="alert">
                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div>
                    <span class="font-medium">{{ $server_message }}
                </div>
            </div>
        </div>
    @endif

    <div class="pt-12 pb-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div wire:loading class="max-w-lg mx-auto pt-7">
                <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                    <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                        <span class="font-medium">Processing...
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Per Page <input wire:model.debounce.200ms='pp' type="number" placeholder="per page" class=" w-1/3 pl-4 text-sm outline-none focus:outline-none bg-transparent">
                </div>
            </div>
        </div>
    </div>


    @if ($movies && count($movies) >= 1)

        @foreach ($movies as $movie)
            <div class="pt-12 pb-6">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="max-w-sm w-full lg:max-w-full lg:flex">
                        <div class="h-48 lg:h-auto lg:w-3/12 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('/img/card-left.jpg')" title="Woman holding a mug">



                            <div class="overflow-hidden relative transform hover:-translate-y-2 transition ease-in-out duration-500 shadow-lg hover:shadow-2xl movie-item text-white movie-card" data-movie-id="438631">
                                <div class="absolute inset-0 z-10 transition duration-300 ease-in-out bg-gradient-to-t from-black via-gray-900 to-transparent"></div>
                                <div class="relative cursor-pointer group z-10 px-10 pt-10 space-y-6 movie_info" data-lity="" href="https://www.youtube.com/embed/aSHs224Dge0">
                                    <div class="poster__info align-self-end w-full">
                                        <div class="h-32"></div>
                                        <div class="space-y-6 detail_info">
                                            <div class="flex flex-col space-y-2 inner">
                                                <h3 class="text-2xl font-bold text-white" data-unsp-sanitized="clean">{{ $movie->movie_data['Title'] }}</h3>
                                                <div class="mb-0 text-lg text-gray-400">{{ $movie->movie_data['Actors'] }}</div>
                                            </div>
                                            <div class="flex flex-row justify-between datos">
                                                <div class="flex flex-col datos_col">
                                                    <div class="popularity">{{ $movie->movie_data['imdbRating'] }}</div>
                                                    <div class="text-sm text-gray-400">Rating:</div>
                                                </div>
                                                <div class="flex flex-col datos_col">
                                                    <div class="release">{{ $movie->movie_data['Released'] }}</div>
                                                    <div class="text-sm text-gray-400">Release date:</div>
                                                </div>
                                                <div class="flex flex-col datos_col">
                                                    <div class="release">{{ $movie->movie_data['Runtime'] }}</div>
                                                    <div class="text-sm text-gray-400">Runtime:</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img class="absolute inset-0 transform w-full -translate-y-4" src="{{ $movie->movie_data['Poster'] }}" style="filter: grayscale(0);" />
                                <div class="poster__footer flex flex-row relative pb-10 space-x-4 z-10 pt-10">
                                    <a
                                        class="flex items-center py-2 px-4 rounded-full mx-auto text-white bg-red-500 hover:bg-red-700"
                                        href="javascript:;"
                                        wire:click='favorite("{{ $movie->movie_data['imdbID'] }}")'
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div class="text-sm text-white ml-2">Favorite</div>
                                    </a>
                                </div>
                            </div>





                        </div>
                        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">




                        <div class="mb-8">
                            <p class="text-sm text-gray-600 flex items-center">
                            <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                            </svg>
                            {{ $movie->movie_data['Type'] }}
                            </p>
                            <div class="text-gray-900 font-bold text-xl mb-2">{{ $movie->movie_data['Title'] }}</div>
                            <p class="text-gray-700 text-base">{{ $movie->movie_data['Plot'] }}</p>
                            <ul class="list-inside bg-rose-200">
                                <li><strong>Year:</strong> {{ $movie->movie_data['Year'] }}</li>
                                <li><strong>Rated:</strong> {{ $movie->movie_data['Rated'] }}</li>
                                <li><strong>Director:</strong> {{ $movie->movie_data['Director'] }}</li>
                                <li><strong>Writer:</strong> {{ $movie->movie_data['Writer'] }}</li>
                                <li><strong>Actors:</strong> {{ $movie->movie_data['Actors'] }}</li>
                                <li><strong>Language:</strong> {{ $movie->movie_data['Language'] }}</li>
                                <li><strong>Country:</strong> {{ $movie->movie_data['Country'] }}</li>
                                <li><strong>Production:</strong> {{ isset($movie->movie_data['Production']) ? $movie->movie_data['Production'] : 'N/A' }}</li>
                            </ul>
                        </div>

                        <div class="rounded overflow-hidden shadow-lg">

                            <div class="px-6 pt-4 pb-2">
                                @php
                                    $genres = explode(",", $movie->movie_data['Genre']);
                                @endphp
                                @foreach ($genres as $genre)
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $genre }}</span>
                                @endforeach
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    @else
    <div class="pt-12 pb-6">
        <div class="rounded overflow-hidden shadow-lg">

            <div class="px-6 pt-4 pb-2">
                <h2>NO Movies found </h2>
            </div>
          </div>
    </div>
    @endif

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-7 pb-10">
        {{ $movies->links() }}
    </div>

</div>
