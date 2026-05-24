<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ThemeController extends Controller
{
    public function toggle(Request $request){
        $currentTheme = $request->cookie('theme') ?? 'light';
        $newTheme = $currentTheme === 'light' ? 'dark' : 'light';

        return redirect()->back()->withCookie(Cookie::make('theme', $newTheme, 60 * 24 * 365));
    }
}
