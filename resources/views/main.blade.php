<x-app-layout>
    <x-slot name="header">
        @include('partials.header',['locale' => $locale])
        @include('partials.header-hero')
    </x-slot>
        @include('partials.projects')
        @include('partials.contact')
    <x-slot name="footer">
        @include('partials.footer')
    </x-slot>
</x-app-layout>
