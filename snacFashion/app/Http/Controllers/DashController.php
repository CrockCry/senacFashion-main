<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estilista;
use App\Models\Home;
use App\Models\Desfile;
use App\Models\FotoDesfile;
use Illuminate\Support\Facades\Storage;

class DashController extends Controller
{
    // Página principal do dashboard
    public function index()
    {
        $estilistas = Estilista::all();
        $banners = Home::all();
        return view('dashboard.index', compact('estilistas', 'banners'));
    }

    // Página de News
    public function news()
    {
        $desfiles = Desfile::all();
        return view('dashboard.news', compact('desfiles'));
    }
}
