<ul class="space-y-2">
    @foreach ($menus as $menu)
        <li>
            <a href="{{ $menu['link'] }}" class="text-blue-600 hover:underline">
                {{ $menu['title'] }}
            </a>
        </li>
    @endforeach
</ul>
