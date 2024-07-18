<?php

namespace App\Http\Controllers;

use App\Models\Desfile;
use Illuminate\Http\Request;

class DesfileController extends Controller
{
    public function index()
    {
        $desfiles = Desfile::with('fotos')->get();
        return view('desfile', compact('desfiles'));
    }
}
