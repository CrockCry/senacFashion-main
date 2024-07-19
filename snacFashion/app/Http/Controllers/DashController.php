<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estilista;

class DashController extends Controller
{
    public function index()
    {
        $estilistas = Estilista::all();
        return view('dashboard.index', compact('estilistas'));
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'imagem_path' => 'required',
        ]);

        Estilista::create($request->all());

        return redirect()->route('dashboard.index')
                        ->with('success', 'Estilista criado com sucesso.');
    }

    public function edit($id)
    {
        $estilista = Estilista::find($id);
        return view('dashboard.edit', compact('estilista'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'imagem_path' => 'required',
        ]);

        $estilista = Estilista::find($id);
        $estilista->update($request->all());

        return redirect()->route('dashboard.index')
                        ->with('success', 'Estilista atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $estilista = Estilista::find($id);
        $estilista->delete();

        return redirect()->route('dashboard.index')
                        ->with('success', 'Estilista deletado com sucesso.');
    }
}
