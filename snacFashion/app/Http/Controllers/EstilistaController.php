<?php

namespace App\Http\Controllers;

use App\Models\Estilista;
use Illuminate\Http\Request;

class EstilistaController extends Controller
{
    public function index()
    {
        return view('estilista');
    }

    public function createEstilista()
    {
        return view('dashboard.estilista.create');
    }

    public function storeEstilista(Request $request)
{
    $request->validate([
        'nome' => 'required',
        'imagem_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'status' => 'required|boolean'
    ]);

    Estilista::create([
        'nome' => $request->input('nome'),
        'imagem_path' => $request->file('imagem_path')->store('images', 'public'),
        'status' => $request->input('status')
    ]);

    return redirect()->route('dashboard.index')->with('success', 'Estilista criado com sucesso.');
}

    public function edit($id)
    {
        $estilista = Estilista::find($id);
        return view('dashboard.estilista.edit', compact('estilista'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'imagem_path' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'status' => 'required|boolean'
        ]);

        $estilista = Estilista::find($id);

        if (!$estilista) {
            return redirect()->route('dashboard.index')->with('error', 'Estilista não encontrado.');
        }

        // Se a imagem foi alterada, armazene o novo caminho
        if ($request->hasFile('imagem_path')) {
            $imagemPath = $request->file('imagem_path')->store('images', 'public');
        } else {
            // Mantenha o caminho da imagem existente
            $imagemPath = $estilista->imagem_path;
        }

        $estilista->update([
            'nome' => $request->input('nome'),
            'imagem_path' => $imagemPath,
            'status' => $request->input('status')
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Estilista atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $estilista = Estilista::find($id);
        $estilista->delete();

        return redirect()->route('dashboard.index')->with('success', 'Estilista deletado com sucesso.');
    }

    public function toggleStatus($id)
    {
        $estilista = Estilista::find($id);
        $estilista->status = !$estilista->status;
        $estilista->save();

        return redirect()->route('dashboard.index')->with('success', 'Status do estilista atualizado com sucesso.');
    }

}
