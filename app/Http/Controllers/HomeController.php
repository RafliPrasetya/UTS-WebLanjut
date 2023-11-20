<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::all(); // Mengambil semua produk dari model Product
        return view('home', compact('products'));
    }
}
