<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estilista;
use App\Models\Home;
use App\Models\Desfile;
use App\Models\FotoDesfile;

class DashController extends Controller
{
    // Edição Estilista - INICIO
    public function index()
    {
        $estilistas = Estilista::all();
        $banners = Home::all();
        $desfiles = Desfile::all(); // Adiciona esta linha para buscar todos os desfiles
        return view('dashboard.index', compact('estilistas', 'banners', 'desfiles'));

    }

    //Edição Estilista - INICIO

    public function create()
    {
        return view('dashboard.estilista.create');
    }

    public function store(Request $request)
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

        return redirect()->route('dashboard.index')
            ->with('success', 'Estilista criado com sucesso.');
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
            return redirect()->route('dashboard.index')
                ->with('error', 'Estilista não encontrado.');
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

    //Edição Banner Home - INICIO

    public function createBanner()
    {
        return view('dashboard.bannerHome.createBanner');
    }

    public function storeBanner(Request $request)
    {
        $request->validate([
            'banner_path' => 'required|mimes:mp4,avi,mov|max:20048',
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
        return view('dashboard.bannerHome.editBanner', compact('banner'));
    }

    public function updateBanner(Request $request, $id)
    {
        $request->validate([
            'banner_path' => 'nullable|mimes:mp4,avi,mov|max:20048',
            'status' => 'required|boolean'
        ]);

        $banner = Home::find($id);

        if ($request->hasFile('banner_path')) {
            $bannerPath = $request->file('banner_path')->store('banners', 'public');
        } else {
            $bannerPath = $banner->banner_path;
        }

        $banner->update([
            'banner_path' => $bannerPath,
            'status' => $request->input('status')
        ]);

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

    // Edição Desfile - INICIO
    public function createDesfile()
    {
        return view('dashboard.createDesfile');
    }

    public function storeDesfile(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'subtitulo' => 'required',
            'data_evento' => 'required|date',
            'sobre_evento' => 'required',
            'banner_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean'
        ]);

        Desfile::create([
            'titulo' => $request->input('titulo'),
            'subtitulo' => $request->input('subtitulo'),
            'data_evento' => $request->input('data_evento'),
            'sobre_evento' => $request->input('sobre_evento'),
            'banner_path' => $request->file('banner_path')->store('desfile_banners', 'public'),
            'status' => $request->input('status')
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Desfile criado com sucesso.');
    }

    public function editDesfile($id)
    {
        $desfile = Desfile::find($id);
        return view('dashboard.editDesfile', compact('desfile'));
    }

    public function updateDesfile(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'subtitulo' => 'required',
            'data_evento' => 'required|date',
            'sobre_evento' => 'required',
            'banner_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean'
        ]);

        $desfile = Desfile::find($id);

        if ($request->hasFile('banner_path')) {
            $bannerPath = $request->file('banner_path')->store('desfile_banners', 'public');
        } else {
            $bannerPath = $desfile->banner_path;
        }

        $desfile->update([
            'titulo' => $request->input('titulo'),
            'subtitulo' => $request->input('subtitulo'),
            'data_evento' => $request->input('data_evento'),
            'sobre_evento' => $request->input('sobre_evento'),
            'banner_path' => $bannerPath,
            'status' => $request->input('status')
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Desfile atualizado com sucesso.');
    }

    public function destroyDesfile($id)
    {
        $desfile = Desfile::find($id);
        $desfile->delete();

        return redirect()->route('dashboard.index')->with('success', 'Desfile deletado com sucesso.');
    }

    public function toggleStatusDesfile($id)
    {
        $desfile = Desfile::find($id);
        $desfile->status = !$desfile->status;
        $desfile->save();

        return redirect()->route('dashboard.index')->with('success', 'Status do desfile atualizado com sucesso');
    }

    // Edição Fotos Desfile - INICIO
    public function createFotoDesfile($desfileId)
    {
        return view('dashboard.createFotoDesfile', compact('desfileId'));
    }

    public function storeFotoDesfile(Request $request, $desfileId)
    {
        $request->validate([
            'foto_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean'
        ]);

        FotoDesfile::create([
            'id_desfile' => $desfileId,
            'foto_path' => $request->file('foto_path')->store('desfile_fotos', 'public'),
            'status' => $request->input('status')
        ]);

        return redirect()->route('dashboard.editDesfile', ['id' => $desfileId])->with('success', 'Foto adicionada com sucesso.');
    }

    public function editFotoDesfile($id)
    {
        $fotoDesfile = FotoDesfile::find($id);
        return view('dashboard.editFotoDesfile', compact('fotoDesfile'));
    }

    public function updateFotoDesfile(Request $request, $id)
    {
        $request->validate([
            'foto_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean'
        ]);

        $fotoDesfile = FotoDesfile::find($id);

        if ($request->hasFile('foto_path')) {
            $fotoPath = $request->file('foto_path')->store('desfile_fotos', 'public');
        } else {
            $fotoPath = $fotoDesfile->foto_path;
        }

        $fotoDesfile->update([
            'foto_path' => $fotoPath,
            'status' => $request->input('status')
        ]);

        return redirect()->route('dashboard.editDesfile', ['id' => $fotoDesfile->id_desfile])->with('success', 'Foto atualizada com sucesso.');
    }

    public function destroyFotoDesfile($id)
    {
        $fotoDesfile = FotoDesfile::find($id);
        $desfileId = $fotoDesfile->id_desfile;
        $fotoDesfile->delete();

        return redirect()->route('dashboard.editDesfile', ['id' => $desfileId])->with('success', 'Foto deletada com sucesso.');
    }

    public function toggleStatusFotoDesfile($id)
    {
        $fotoDesfile = FotoDesfile::find($id);
        $fotoDesfile->status = !$fotoDesfile->status;
        $fotoDesfile->save();

        return redirect()->route('dashboard.editDesfile', ['id' => $fotoDesfile->id_desfile])->with('success', 'Status da foto atualizado com sucesso');
    }
    // Edição Fotos Desfile - FIM

    // Página de News
    public function news()
    {
        // Lógica para carregar dados da página de News (desfile)
        return view('dashboard.news');
    }
}
