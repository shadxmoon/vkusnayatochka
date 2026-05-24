<x-main-layout
    title="Каталог товаров"
    description="Каталог доступного для заказа меню быстрого питания"
    keywords="меню, вкусно и точка, макдональдс, мак, фастфуд, быстрое питания, питание, пища, еда, вкусная еда, бургеры, роллы, картошка фри"
>
<div class="container mx-auto flex flex-col items-center gap-6 py-10">
   <h1 class="text-2xl dark:text-zinc-100">Корзина</h1>

    <div id="cart-count">
    <h2 class="text-xl dark:text-zinc-100">Товаров: {{ session('count', 0) }} </h2>
    </div>

    <div class="flex flex-col gap-4">
        @foreach($items as $item)

    <div id="product-{{ $item['index'] }}" class="border-l-2 border-amber-400 px-5 flex items-center justify-between gap-5">

        <div>
            <h2 class="text-lg dark:text-zinc-100">{{ $item['product']->title }}</h2>
            <p class="dark:text-zinc-100 font-bold">{{ $item['product']->price }} ₽</p>
        </div>
        <div>
            <button data-index="{{ $item['index'] }}" class="remove-item bg-amber-500 cursor-pointer hover:bg-amber-600 text-zinc-100 px-4 py-1 rounded-sm">Удалить</button>
        </div>

    </div>

@endforeach
    </div>

<script>
    document.querySelectorAll('.remove-item').forEach(function(btn){
        btn.addEventListener('click', function(e){
            const index = this.getAttribute('data-index');

            fetch("{{ route('orders.remove-item') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ index: parseInt(index, 10) })
            })
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                // remove element from DOM
                const el = document.getElementById('product-' + index);
                if(el) el.remove();

                // update page count
                const cartCount = document.getElementById('cart-count');
                if(cartCount){
                    cartCount.innerHTML = '<h2 class="text-xl dark:text-zinc-100">Товаров: ' + (data.count || 0) + ' </h2>';
                }

                // update header basket count if exists
                const headerCount = document.getElementById('basket-count');
                if(headerCount){
                    headerCount.textContent = data.count || 0;
                    if((data.count || 0) === 0){
                        headerCount.classList.add('invisible');
                    } else {
                        headerCount.classList.remove('invisible');
                    }
                }
            })
            .catch(err => {
                console.error(err);
                alert('Не удалось удалить товар');
            });
        });
    });
</script>
    
</div>
    
</x-main-layout>