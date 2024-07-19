<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Estilista;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Home::first();
        $estilistas = Estilista::take(3)->get();
        $estilistas = Estilista::where('status', 1)->get();

        return view('home', compact('banner', 'estilistas'));
    }
}
