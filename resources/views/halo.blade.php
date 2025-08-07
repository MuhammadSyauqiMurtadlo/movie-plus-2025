<x-app>
    <x-slot name="sidebar">
        <x-partials.sidebar :menus="[
            ['title' => 'Home', 'link' => '/home'],
            ...
        ]" />
    </x-slot>
    <x-slot name="main">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @if (isset($movies) && is_array($movies) && count($movies))
                @foreach ($movies as $movie)
                    <x-movie.card :index="$loop->index" :title="$movie['title']" :image="$movie['image']" :releaseDate="$movie['releaseDate']" />
                @endforeach
            @else
                <div class="col-span-full text-center text-gray-500">No movies available.</div>
            @endif
        </div>
    </x-slot>
</x-app>

