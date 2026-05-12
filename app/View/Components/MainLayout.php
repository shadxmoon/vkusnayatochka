<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class MainLayout extends Component
{
    public function __construct(
        public string $title = 'Вкусно и точка Онлайн',
        public string $description = 'Интернет-магазин доставки еды в Челябинске, Вкусно и Точка',
        public string $keywords = 'интернет магазин, вкусно и точка, макдональдс, бургеры, роллы, пища, еда, фастфуд, заказать еду, доставка еды, питание, челябинск доставка'
    )
    {}
    public function render(): View
    {
        return view('layouts.main');
    }
}
