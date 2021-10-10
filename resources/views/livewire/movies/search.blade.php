<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <input wire:model='q' wire:keydown.enter='search' wire:model.defer='search' type="search" placeholder="search for a movie">
                </div>
            </div>
        </div>
    </div>

    @foreach ($movies as $movie)
        /////
    @endforeach





</div>
