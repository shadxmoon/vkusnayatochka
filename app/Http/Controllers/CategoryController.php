<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index(){
        $products = Product::all();
        
        $categories = Category::where('id','>=',1)
                        ->orderBy('title','DESC')
                        ->get();
        
        return view('categories.index', compact('categories', 'products'));
    }

    public function show(Category $category){
        return view('categories.show', compact('category'));
    }
}
