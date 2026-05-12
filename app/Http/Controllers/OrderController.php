<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller
{
    public function show()
    {
        $order = Order::inRandomOrder()->first();
        return view('orders.show', compact('order'));
    }

    public function addItem(Request $request){
        $request->validate([
            'product_id' => ['required', 'exists:products,id'],
        ]);

        $product = Product::where('product_id', '=', $request->product_id)->first();

        if(!$product){
            abort(403);
        }

        $orderItems = [];

        if(Session::has('cart')){
            $orderItems = Session::get('cart', []);
        }

        array_push($orderItems, ['product_id' => $request->product_id ]);

        Session::put('cart', $orderItems);

        if(Session::has('count')){
            $count = Session::get('count');
            $count++;
        } else {
            $count = 1;
        }

        Session::put('count');

        return redirect()->back();
    }
}
