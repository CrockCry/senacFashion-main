@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Desfile</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.updateDesfile', $desfile->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titulo_desfile">Título</label>
                <input type="text" class="form-control" id="titulo_desfile" name="titulo_desfile" value="{{ $desfile->titulo_desfile }}" required>
            </div>
            <div class="form-group">
                <label for="subtitulo_desfile">Subtítulo</label>
                <input type="text" class="form-control" id="subtitulo_desfile" name="subtitulo_desfile" value="{{ $desfile->subtitulo_desfile }}" required>
            </div>
            <div class="form-group">
                <label for="data_desfile">Data do Evento</label>
                <input type="date" class="form-control" id="data_desfile" name="data_desfile" value="{{ $desfile->data_desfile }}" required>
            </div>
            <div class="form-group">
                <label for="sobre_desfile">Sobre o Evento</label>
                <textarea class="form-control" id="sobre_desfile" name="sobre_desfile" required>{{ $desfile->sobre_desfile }}</textarea>
            </div>
            <div class="form-group">
                <label for="banner_desfile">Banner</label>
                @if ($desfile->banner_desfile)
                    <div class="mb-2">
                        <img src="{{ asset('assets/img/' . $desfile->banner_desfile) }}" alt="Banner atual" style="width: 100%; max-width: 200px;">
                    </div>
                @endif
                <input type="file" class="form-control" id="banner_desfile" name="banner_desfile">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="1" {{ $desfile->status ? 'selected' : '' }}>Ativo</option>
                    <option value="0" {{ !$desfile->status ? 'selected' : '' }}>Inativo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

        <h2>Fotos</h2>
        <a href="{{ route('dashboard.createFotoDesfile', $desfile->id) }}" class="btn btn-success">Adicionar Foto</a>

        @foreach($desfile->fotos as $foto)
            <div class="card mt-2">
                <img class="card-img-top" src="{{ asset('assets/img/modelos/' . $foto->foto_desfile) }}" alt="Foto" style="width: 35%">
                <div class="card-body">
                    <form action="{{ route('dashboard.toggleStatusFotoDesfile', $foto->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-{{ $foto->status ? 'danger' : 'success' }}">
                            {{ $foto->status ? 'Desativar' : 'Ativar' }}
                        </button>
                    </form>
                    <a href="{{ route('dashboard.editFotoDesfile', $foto->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('dashboard.destroyFotoDesfile', $foto->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
