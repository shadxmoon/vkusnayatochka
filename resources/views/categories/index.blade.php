<x-main-layout>
    <div class="mt-45 mb-45">
       <div class="flex flex-col items-center">
            <p class="text-zinc-200 text-2xl mb-5">Категории товаров</p>
            <ul class="flex flex-col gap-3 text-lg">
                @foreach($categories as $category)
                    <li class="text-zinc-400"><a href="{{ route('categories.show', ['category'=>$category->slug]) }}" class="hover:text-amber-400/70">{{$category->title}}</a></li>
                @endforeach
            </ul>
        </div> 
    </div>
    
</x-main-layout>