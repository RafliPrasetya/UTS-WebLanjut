<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function order()
    {
        $products = Product::all();
        return view('order', compact('products'));
    }

    public function submit(Request $request)
    {
        $request->validate([
            'product' => 'required',
            'quantity' => 'required|integer|min:1',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $order = new Order();
        $order->product_id = $request->input('product');
        $order->quantity = $request->input('quantity');
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->save();

        return redirect()->route('order.success')->with('success', 'Pesanan Anda berhasil diterima.');
    }
}

