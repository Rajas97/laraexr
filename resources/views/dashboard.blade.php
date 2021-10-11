<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="display: flex;justify-content:space-between">
            <span>{{ __('Search Movies') }}</span>

            <a href="{{ route('dashboard.favorite.movies') }}"
                type="button"
                class="px-4 py-3 bg-blue-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-x-75 transition-transform mx-5 flex"
            >
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>

                <span class="ml-2">My Movies</span>
            </a>
        </h2>
    </x-slot>
    <livewire:movies.search />
</x-app-layout>
