<x-main-layout 
    title="{{$product->page_title}}"
    description="{{$product->page_description}}"
    keywords="{{$product->keywords}}"
>
        <div class="container mx-auto flex flex-col items-center">
            
            <div class="mb-4 flex bg-zinc-100 p-8 rounded-xl flex flex-col max-w-2xl">
                <div class="flex flex-row mb-5">
                  <img class="aspect-1/1 mr-4" src="{{ Vite::asset($product->path_img) }}" alt="{{ $product->title }}">
                  <div class="flex flex-col gap-2 w-full">
                    <h2 class="text-2xl font-bold">{{$product->title}}</h2>
                    <p class="text-xl border-t-4 border-amber-400 py-2">Цена: {{ $product->price}} &#8381;</p>
                    <p class="text-lg">Категория: <span class="text-amber-600">{{ $product->category->title }}</span></p>
                    <div class="bg-zinc-300 px-4 py-2 text-zinc-600 rounded-sm flex flex-row items-center justify-between">
                        <div class="flex flex-col">
                           <span>Продукт доступен</span>
                            <span>Готовы: <span class="font-semibold">{{ $product->count }}</span> штук</span> 
                        </div>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                        </svg>
                    </div>
                    <div class="flex flex-row gap-4">
                    <a class="bg-amber-400/80 rounded-lg px-4 py-2 cursor-pointer w-full text-center hover:bg-amber-500 transition 0.3 ease-in-out">
                        Заказать
                    </a>
                    <a class="bg-amber-400/80 rounded-lg px-4 py-2 cursor-pointer w-full text-center hover:bg-amber-500 transition 0.3 ease-in-out">
                        В корзину
                    </a>
                </div>
                  </div>
                </div>
                <div>
                    <div class="bg-zinc-300 px-4 py-2 text-zinc-600 rounded-sm mb-2">Описание</div>
                    @if (empty($product->description))
                        <p class="text-lg">Описания нет.</p>
                    @else
                        <p class="text-lg">{{ $product->description }}</p>
                    @endif
                </div>
            </div>
        </div>
</x-main-layout>
