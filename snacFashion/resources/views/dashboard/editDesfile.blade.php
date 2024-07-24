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
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $desfile->titulo }}" required>
            </div>
            <div class="form-group">
                <label for="subtitulo">Subtítulo</label>
                <input type="text" class="form-control" id="subtitulo" name="subtitulo" value="{{ $desfile->subtitulo }}" required>
            </div>
            <div class="form-group">
                <label for="data_evento">Data do Evento</label>
                <input type="date" class="form-control" id="data_evento" name="data_evento" value="{{ $desfile->data_evento }}" required>
            </div>
            <div class="form-group">
                <label for="sobre_evento">Sobre o Evento</label>
                <textarea class="form-control" id="sobre_evento" name="sobre_evento" required>{{ $desfile->sobre_evento }}</textarea>
            </div>
            <div class="form-group">
                <label for="banner_path">Banner</label>
                <input type="file" class="form-control" id="banner_path" name="banner_path">
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
                <img class="card-img-top" src="{{ asset('storage/' . $foto->foto_path) }}" alt="Foto">
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
