<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function show()
{
    $cart = Session::get('cart', []);

    $productIds = array_column($cart, 'product_id');

    $products = Product::whereIn('id', $productIds)->get()->keyBy('id');

    $items = [];
    foreach ($cart as $i => $item) {
        $product = $products[$item['product_id']] ?? null;
        if ($product) {
            $items[] = [
                'index' => $i,
                'product' => $product,
            ];
        }
    }

    return view('orders.basket', compact('items'));
}

    public function addItem(Request $request)
    {
        $request->validate([
            'product_id' => ['required', 'exists:products,id'],
        ]);

        $product = Product::find($request->product_id);

        $orderItems = [];

        if(Session::has('cart')){
            $orderItems = Session::get('cart', []);
        }

        array_push($orderItems, [
            'product_id' => $request->product_id
        ]);

        Session::put('cart', $orderItems);

        if(Session::has('count')){
            $count = Session::get('count');
            $count++;
        } else {
            $count = 1;
        }

        Session::put('count', $count);

        return response()->json([
            'count' => $count,
        ]);
    }

    public function removeItem(Request $request)
    {
        $request->validate([
            'index' => ['required', 'integer'],
        ]);

        $index = $request->input('index');

        $cart = Session::get('cart', []);

        if (!array_key_exists($index, $cart)) {
            return response()->json(['error' => 'Товар не найден'], 404);
        }

        array_splice($cart, $index, 1);

        Session::put('cart', $cart);
        $count = max(0, Session::get('count', 0) - 1);
        Session::put('count', $count);

        return response()->json([
            'count' => $count,
            'index' => $index,
        ]);
    }
}
