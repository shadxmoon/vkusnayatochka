<x-main-layout>
        <div class="container mx-auto">
            @foreach ($categories as $category)
            <h2 class="text-zinc-300 text-xl">{{ $category->title }}</h2>
            <ul class="relative mt-5 grid grid-cols-4 gap-5 tablet-md:grid-cols-3 tablet:grid-cols-2 mobile:grid-cols-1 mobile:gap-[14px] pb-1.5 desktop:pb-8 tablet:pb-4">
                @foreach($category->products as $product)
                    <li class="bg-gray-200 flex cursor-pointer flex-col overflow-hidden rounded-xl p-6 gap-4 text-md" id="{{$category->id}}">
                        <img class="mx-auto aspect-1/1 w-64 h-full" src="{{ Vite::asset($product->path_img) }}" alt="{{ $product->title }}">
                        <p class="text-center">{{$product->title}}</p>
                        <div class="flex flex-row justify-between items-center">
                            <p class="font-bold">от {{$product->price}} &#8381;</p>
                            <a class="bg-amber-400/70 rounded-lg p-2 cursor-pointer" href="{{ route('products.show', ['product'=>$product]) }}">Просмотреть</a>
                        </div>
                    </li>
                @endforeach
            </ul>
            @endforeach
        </div>
</x-main-layout>
