<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;

class MainPageController extends Controller
{
    public function index(){
        $sales = Sales::all();

        return view('welcome', compact('sales'));
    }
}
