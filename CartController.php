<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Retrieve the cart items (this can be enhanced later to pull from a session or database)
        $cartItems = session()->get('cart', []);

        return view('cart.index', compact('cartItems'));
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);

        $cart[$request->id] = [
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => isset($cart[$request->id]) ? $cart[$request->id]['quantity'] + 1 : 1,
        ];

        session()->put('cart', $cart);

        return back()->with('success', 'Product added to cart successfully!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Product removed from cart successfully!');
    }
}
