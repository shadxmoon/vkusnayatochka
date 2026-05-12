<header class="flex flex-row justify-between items-center bg-zinc-800 px-45 py-5 mb-5 text-gray-300">
    <div>
        <x-application-logo/>
    </div>
    <div>
        <nav>
            <ul class="flex flex-row gap-6">
                <li><a href="/" class="header-link">Главная</a></li>
                <li><a href="{{route('products.index')}}" class="header-link">Каталог</a></li>
                <li><a href="{{ route('categories.index')}}" class="header-link">Категории</a></li>
                <li><a href="" class="header-link">Контакты</a></li>
            </ul>
        </nav>
    </div>
    <div>
        <form action="">
            <div class="flex flex-row gap-3">
               <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
            </button>
            <input type="text" id="search" placeholder="Найти" class="bg-zinc-700 px-3 py-1 rounded-sm max-w-45">  
            </div>
            
        </form>
    </div>
    <div>
        <a href="" class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-basket2-fill hover:scale-110 0.2s ease-in-out" viewBox="0 0 16 16">
            <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1"/>
            </svg>
            <div class="basket-count {{ session()->has('count') && session('count') != 0 ? '' : 'invisible' }}" id="basket-count">
                {{ session('count') }}
            </div>
        </a>
        
    </div>
</header>