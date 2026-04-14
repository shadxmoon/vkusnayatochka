<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class MainLayout extends Component
{
    public function __construct(
        public string $title = 'Интернет-магазин',
        public string $description = 'Интернет-магазин для продажи мебели',
        public string $keywords = 'интернет-магазин, мебель, мебель в челябинске, стол, стул, шкаф, кровать, диван, кухня, мебель для дачи, кухонная мебель, мебель в квартиру, ремонт, высококачественная мебель, импортная мебель, лучшая мебель, красивая мебель'
    )
    {}
    public function render(): View
    {
        return view('layouts.main');
    }
}
