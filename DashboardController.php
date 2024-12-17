<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get the authenticated user
        $totalProducts = Product::count();
        $cartCount = session()->has('cart') ? count(session()->get('cart')) : 0;

        return view('dashboard', compact('user', 'totalProducts', 'cartCount'));
    }
}
