<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    function index()
    {
        return view('categorias.index');
    }
}
