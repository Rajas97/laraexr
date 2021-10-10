<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Movies') }}
        </h2>
    </x-slot>
    <livewire:movies.search />
</x-app-layout>
