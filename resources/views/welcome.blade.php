<x-main-layout>
    <div class="container mx-auto">
        <h1 class="text-3xl text-zinc-200 text-center font-bold mb-8 mt-5">Акции</h1>
        <div class="flex flex-row items-center relative px-6">
            <div id="prev-btn" class="absolute left-0 text-3xl bg-zinc-300 rounded-full px-4 py-2 cursor-pointer hover:bg-zinc-200 z-10">
                <span class="text-zinc-500 focus:text-zinc-700"><</span>
            </div>
            <div class="mx-auto overflow-hidden rounded-xl">
                <div id="slider" class="flex flex-row w-full transition-transform duration-400">
                    @foreach ($sales as $sale)
                        <img src="{{ Vite::asset($sale->path_img)}}" class="w-full shrink-0 " alt="">
                    @endforeach
                </div>
            </div>
            
            <div id="next-btn" class="right-0 absolute text-3xl bg-zinc-300 rounded-full px-4 py-2 cursor-pointer hover:bg-zinc-200 z-10">
                <span class="text-zinc-500 focus:text-zinc-700">></span>
            </div>
        </div>
        <div class="grid grid-cols-2 w-full mt-30 rounded-xl bg-zinc-600 py-15 px-10 gap-10">
           <h1 class="text-6xl text-zinc-200 text-center font-bold border-r-3 border-amber-500/70">О нас</h1>
           <div>
                <p class="text-lg text-zinc-300">
                    <span class="text-amber-500/70 font-bold">«Вкусно — и точка»</span> – ведущая сеть общественного питания, насчитывающая более 980 предприятий в 66 субъектах РФ.
                    Каждый день наша команда готовит для посетителей продукты из натуральных ингредиентов. 
                    Разнообразное меню, удобная экологичная упаковка, приятная атмосфера, быстрое обслуживание и доступные цены — это далеко не полный список причин, по которым россияне выбирают «Вкусно — и точка».
                </p>
            </div>
        </div>  
    </div>
    
</x-main-layout>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.getElementById('slider');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');

        let currentSlide = 0;
        const sliderLength = slider.children.length;

        nextBtn.addEventListener('click', () => {
            currentSlide++;
            if (currentSlide >= sliderLength) currentSlide = 0;
            updateSlider();
        });

        prevBtn.addEventListener('click', () => {
            currentSlide--;
            if (currentSlide < 0) currentSlide = sliderLength - 1;
            updateSlider();
        });

        function updateSlider() {
            slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        }
    });
</script>