<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(Request $request) {
        return view('app.categoria');
    }
}
