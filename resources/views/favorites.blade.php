<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="display: flex;justify-content:space-between">
            <span>{{ __('My Movies') }}</span>

            <a href="{{ route('dashboard') }}"
                type="button"
                class="px-4 py-3 bg-blue-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-x-75 transition-transform mx-5 flex"
            >
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
            </svg>

                <span class="ml-2">Search Movies</span>
            </a>
        </h2>
    </x-slot>
    <livewire:movies.favorites />
</x-app-layout>
