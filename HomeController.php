<?php
namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Get all products
        return view('home', compact('products'));
    }
}
