<?php

namespace App\Http\Controllers;

use App\Models\Desfile;
use App\Models\FotoDesfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DesfileController extends Controller
{

    public function index()
    {
        $desfiles = Desfile::all();
        return view('desfile', compact('desfiles'));
    }
    public function news()
    {
        $desfiles = Desfile::with('fotos')->get();
        return view('desfile', compact('desfiles'));
    }

    // Métodos para Desfile
    public function createDesfile()
    {
        return view('dashboard.desfile.createDesfile');
    }

    public function storeDesfile(Request $request)
    {
        $request->validate([
            'banner_desfile' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'titulo_desfile' => 'string|max:255',
            'subtitulo_desfile' => 'string|max:255',
            'sobre_desfile' => 'string',
            'data_desfile' => 'date',
            'status' => 'boolean'
        ]);

        if ($request->hasFile('banner_desfile')) {
            $bannerFile = $request->file('banner_desfile');
            $bannerPath = $bannerFile->storeAs('public/assets/img', $bannerFile->getClientOriginalName());
            $bannerPath = str_replace('public/assets/img/', '', $bannerPath);
        }

        Desfile::create([
            'banner_desfile' => $bannerPath,
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

    if (!$desfile) {
        return redirect()->route('dashboard.news')->with('error', 'Desfile não encontrado.');
    }

    return view('dashboard.desfile.editDesfile', compact('desfile'));
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

        return redirect()->route('dashboard.desfile.editDesfile', $id)
            ->with('success', 'Desfile atualizado com sucesso.');
    }


    public function destroyDesfile($id)
    {
        $desfile = Desfile::find($id);

        if ($desfile) {
            $desfile->delete();

            return redirect()->route('dashboard.news')
                ->with('success', 'Desfile deletado com sucesso.');
        }

        return redirect()->route('dashboard.news')->with('error', 'Desfile não encontrado.');
    }
    public function toggleStatusDesfile($id)
    {
        $desfile = Desfile::find($id);
        $desfile->status = !$desfile->status;
        $desfile->save();

        return redirect()->route('dashboard.news')->with('success', 'Status do desfile atualizado com sucesso.');
    }


    // Métodos para Foto do Desfile
// Métodos para fotos
    public function createFoto($desfileId)
    {
        return view('dashboard.createFotoDesfile', compact('desfileId'));
    }

    // Adicionar foto ao desfile
    public function storeFoto(Request $request, $desfileId)
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

        return redirect()->route('dashboard.desfile.editDesfile', ['id' => $desfileId])->with('success', 'Foto adicionada com sucesso.');
    }



    public function editFoto($id)
    {
        $fotoDesfile = FotoDesfile::find($id);
        $desfileId = $fotoDesfile->id_desfile;
        return view('dashboard.editFotoDesfile', compact('fotoDesfile', 'desfileId'));
    }

    public function updateFoto(Request $request, $id)
    {
        $request->validate([
            'foto_desfile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean'
        ]);

        $fotoDesfile = FotoDesfile::find($id);

        if ($request->hasFile('foto_desfile')) {
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

        return redirect()->route('dashboard.desfile.editDesfile', ['id' => $fotoDesfile->id_desfile])->with('success', 'Foto atualizada com sucesso.');
    }

    public function destroyFoto($id)
    {
        $foto = FotoDesfile::find($id);

        if ($foto) {
            // Supondo que $foto->desfile_id é o ID do desfile ao qual a foto pertence
            $desfileId = $foto->desfile_id;

            // Excluir a foto
            $foto->delete();

            return redirect()->route('dashboard.desfile.editDesfile', $desfileId)
                ->with('success', 'Foto deletada com sucesso.');
        }

        return redirect()->route('dashboard.index')->with('error', 'Foto não encontrada.');
    }

    public function toggleStatusFoto($id)
    {
        $foto = FotoDesfile::find($id);
        $foto->status = !$foto->status;
        $foto->save();

        return redirect()->route('dashboard.news')->with('success', 'Status da foto do desfile atualizado com sucesso.');
    }
}

