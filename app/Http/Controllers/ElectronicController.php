<?php

namespace App\Http\Controllers;

use App\Models\Electronic;

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
}
