<?php

namespace App\Http\Controllers;

use App\Models\Electronic;
use Illuminate\Http\Request;

class ElectronicController extends Controller
{
    public function home()
    {
        return view('electronics.home');
    }

    public function index()
    {
        $electronics = Electronic::all();
        return view('electronics.index', compact('electronics'));
    }

    public function show($id)
    {
        $electronic = Electronic::findOrFail($id);
        return view('electronics.show', compact('electronic'));
    }

    public function about()
    {
        return view('electronics.about');
    }

    
    public function cart()
    {
        $cart = session()->get('cart', []);
        $products = [];

        if (!empty($cart)) {
            $products = Electronic::whereIn('id', array_keys($cart))->get();
        }

        return view('electronics.cart', compact('products', 'cart'));
    }

    
    public function addToCart($id)
    {
        $product = Electronic::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart')->with('success', 'Produk dihapus dari keranjang!');
    }
}