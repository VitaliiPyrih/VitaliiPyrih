<x-app-layout>
        <x-slot name="header">
            @include('partials.header')
            @include('partials.header-hero')
        </x-slot>

        <x-slot name="footer">
            @include('partials.footer')
        </x-slot>
</x-app-layout>
