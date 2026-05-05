<x-main-layout 
    title="{{$product->page_title}}"
    description="{{$product->page_description}}"
    keywords="{{$product->keywords}}"
>
        <div class="container mx-auto flex flex-col items-center">
            
            <div class="mb-4 flex bg-zinc-200 p-8 rounded-xl flex flex-col max-w-2xl">
                <div class="flex flex-row mb-5">
                  <img class="aspect-1/1 mr-4" src="{{ Vite::asset($product->path_img) }}" alt="{{ $product->title }}">
                  <div class="flex flex-col gap-2">
                    <h2 class="text-2xl font-bold">{{$product->title}}</h2>
                    <p class="text-xl border-t-4 border-amber-400 py-2">Цена: {{ $product->price}} &#8381;</p>
                    <p class="text-lg">Категория: <span class="text-amber-600">{{ $product->category->title }}</span></p>
                    <div class="bg-zinc-300 px-4 py-2 text-zinc-600 rounded-sm flex flex-row items-center justify-between">
                        Продукт доступен
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                        </svg>
                    </div> 
                  </div>
                </div>
                <div>
                    <div class="bg-zinc-300 px-4 py-2 text-zinc-600 rounded-sm mb-2">Описание</div>
                    <p class="text-lg">{{ $product->description }}</p>
                </div>
            </div>
        </div>
</x-main-layout>
