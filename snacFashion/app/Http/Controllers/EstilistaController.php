<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstilistaController extends Controller
{
    public function index()
    {
        return view('estilista');
    }
}
