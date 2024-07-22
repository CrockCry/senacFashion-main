<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estilista;
use App\Models\Home;

class DashController extends Controller
{
    // Edição Estilista - INICIO
    public function index()
    {
        $estilistas = Estilista::all();
        $banners = Home::all();
        return view('dashboard.index', compact('estilistas', 'banners'));
    }

    public function show()
    {
        $banner = Home::first(); // Ou ajuste conforme a lógica necessária
        return view('dashboard.show', compact('banner'));
    }

    //Edição Banner Home - INICIO

    public function createBanner()
    {
        return view('dashboard.createBanner');
    }

    public function storeBanner(Request $request)
    {
        $request->validate([
            'banner_path' => 'required|mimes:mp4,avi,mov',
            'status' => 'required|boolean'
        ]);

        Home::create([
            'banner_path' => $request->file('banner_path')->store('banners', 'public'),
            'status' => $request->input('status')
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Banner criado com sucesso.');
    }

    public function editBanner($id)
    {
        $banner = Home::find($id);
        return view('dashboard.editBanner', compact('banner'));
    }

    public function updateBanner(Request $request, $id)
    {
        $request->validate([
            'banner_path' => 'required',
        ]);

        $banner = Home::find($id);
        $banner->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Banner atualizado com sucesso');
    }

    public function destroyBanner($id)
    {
        $banner = Home::find($id);
        $banner->delete();

        return redirect()->route('dashboard.index')->with('success', 'Banner deletado com sucesso');
    }

    public function toggleStatusBanner($id)
    {
        $banner = Home::find($id);
        $banner->status = !$banner->status;
        $banner->save();

        return redirect()->route('dashboard.index')->with('success', 'Status do banner atualizado com sucesso');
    }

    //Edição Banner Home - FIM


    // Edição Estilista - INICIO

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'banner_path' => 'required|mimes:mp4,avi,mov',
            'status' => 'required|boolean'
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

    public function toggleStatus($id)
    {
        $estilista = Estilista::find($id);
        $estilista->status = !$estilista->status;
        $estilista->save();

        return redirect()->route('dashboard.index')
            ->with('success', 'Status do estilista atualizado com sucesso.');
    }

    //Edição Estilista - FIM

    //Edição Desfile
    public function news()
    {
        // Lógica para carregar dados da página de News (desfile)
        return view('dashboard.news');
    }
}
