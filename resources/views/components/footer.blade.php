<footer class="bg-zinc-800 w-full flex justify-between px-45 py-7 mt-45">
    <div class="flex flex-col items-center">
        <p class="text-zinc-400">Категории товаров</p>
        <ul>
            @foreach($categories as $category)
                <li class="text-zinc-500"><a href="{{ route('products.index', ['category'=>$category]) }}" class="hover:text-amber-400/70">{{$category->title}}</a></li>
            @endforeach
        </ul>
    </div>
    <div>
        <p class="text-zinc-400">&copy; Вкусно и Точка</p>
    </div>
</footer>