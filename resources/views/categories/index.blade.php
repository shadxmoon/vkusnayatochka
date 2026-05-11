<x-main-layout>
    <div class="flex flex-col items-center">
        <p class="text-zinc-400">Категории товаров</p>
        <ul>
            @foreach($categories as $category)
                <li class="text-zinc-500"><a href="{{ route('categories.show', ['category'=>$category->slug]) }}" class="hover:text-amber-400/70">{{$category->title}}</a></li>
            @endforeach
        </ul>
    </div>
</x-main-layout>