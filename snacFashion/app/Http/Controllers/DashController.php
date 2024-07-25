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

    public function showHome()
    {
        // Busca o banner ativo
        $banner = Home::where('status', 1)->first();

        // Busca estilistas
        $estilistas = Estilista::all();

        // Passa os dados para a view
        return view('home', compact('banner', 'estilistas'));
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

    public function showDesfiles()
{
    // Busca desfiles ativos
    $desfiles = Desfile::where('status', 1)->get();

    // Passa os desfiles ativos para a view
    return view('desfile', compact('desfiles'));
}


    public function storeDesfile(Request $request)
    {
        $request->validate([
            'banner_desfile' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'titulo_desfile' => 'required',
            'subtitulo_desfile' => 'required',
            'sobre_desfile' => 'required',
            'data_desfile' => 'required|date',
            'status' => 'required|boolean'
        ]);

        Desfile::create([
            'banner_desfile' => $request->input('banner_desfile'),
            'titulo_desfile' => $request->input('titulo_desfile'),
            'subtitulo_desfile' => $request->input('subtitulo_desfile'),
            'sobre_desfile' => $request->input('sobre_desfile'),
            'data_desfile' => $request->input('data_desfile'),
            'status' => $request->input('status')
        ]);

        return redirect()->route('dashboard.news')->with('success', 'Desfile criado com sucesso.');
    }

    public function editDesfile($id)
    {
        $desfile = Desfile::find($id);
        return view('dashboard.editDesfile', compact('desfile'));
    }

public function updateDesfile(Request $request, $id)
{
    $request->validate([
        'banner_desfile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'titulo_desfile' => 'required',
        'subtitulo_desfile' => 'required',
        'sobre_desfile' => 'required',
        'data_desfile' => 'required|date',
        'status' => 'required|boolean'
    ]);

    $desfile = Desfile::find($id);

    if ($request->hasFile('banner_desfile')) {
        // Salvar a imagem na pasta public/assets/img
        $bannerFile = $request->file('banner_desfile');
        $bannerPath = $bannerFile->storeAs('public/assets/img', $bannerFile->getClientOriginalName());
        $bannerPath = str_replace('public/assets/img/', '', $bannerPath);
    } else {
        $bannerPath = $desfile->banner_desfile;
    }

    $desfile->update([
        'banner_desfile' => $bannerPath,
        'titulo_desfile' => $request->input('titulo_desfile'),
        'subtitulo_desfile' => $request->input('subtitulo_desfile'),
        'sobre_desfile' => $request->input('sobre_desfile'),
        'data_desfile' => $request->input('data_desfile'),
        'status' => $request->input('status')
    ]);

    return redirect()->route('dashboard.news')->with('success', 'Desfile atualizado com sucesso.');
}

    public function destroyDesfile($id)
    {
        $desfile = Desfile::find($id);
        $desfile->delete();

        return redirect()->route('dashboard.news')->with('success', 'Desfile deletado com sucesso.');
    }

    public function toggleStatusDesfile($id)
    {
        $desfile = Desfile::find($id);
        $desfile->status = !$desfile->status;
        $desfile->save();

        return redirect()->route('dashboard.news')->with('success', 'Status do desfile atualizado com sucesso');
    }

    // Edição Fotos Desfile - INICIO
    public function createFotoDesfile($desfileId)
    {
        return view('dashboard.createFotoDesfile', compact('desfileId'));
    }

    public function storeFotoDesfile(Request $request, $desfileId)
{
    $request->validate([
        'foto_desfile' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'status' => 'required|boolean'
    ]);

    $fotoFile = $request->file('foto_desfile');
    $fotoPath = $fotoFile->storeAs('public/assets/img/modelos', $fotoFile->getClientOriginalName());
    $fotoPath = str_replace('public/assets/img/modelos/', '', $fotoPath);

    FotoDesfile::create([
        'id_desfile' => $desfileId,
        'foto_desfile' => $fotoPath,
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
            'foto_desfile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean'
        ]);

        $fotoDesfile = FotoDesfile::find($id);

        if ($request->hasFile('foto_desfile')) {
            // Salvar a imagem na pasta public/assets/img/modelos
            $fotoFile = $request->file('foto_desfile');
            $fotoPath = $fotoFile->storeAs('public/assets/img/modelos', $fotoFile->getClientOriginalName());
            $fotoPath = str_replace('public/assets/img/modelos/', '', $fotoPath);
        } else {
            $fotoPath = $fotoDesfile->foto_desfile;
        }

        $fotoDesfile->update([
            'foto_desfile' => $fotoPath,
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
        $estilistas = Estilista::all();
        $banners = Home::all();
        $desfiles = Desfile::all(); // Adiciona esta linha para buscar todos os desfiles
        return view('dashboard.news', compact('estilistas', 'banners', 'desfiles'));
    }
}
