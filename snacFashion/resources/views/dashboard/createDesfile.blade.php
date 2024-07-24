@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adicionar Desfile</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.storeDesfile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}" required>
            </div>
            <div class="form-group">
                <label for="subtitulo">Subtítulo</label>
                <input type="text" class="form-control" id="subtitulo" name="subtitulo" value="{{ old('subtitulo') }}" required>
            </div>
            <div class="form-group">
                <label for="data_evento">Data do Evento</label>
                <input type="date" class="form-control" id="data_evento" name="data_evento" value="{{ old('data_evento') }}" required>
            </div>
            <div class="form-group">
                <label for="sobre_evento">Sobre o Evento</label>
                <textarea class="form-control" id="sobre_evento" name="sobre_evento" required>{{ old('sobre_evento') }}</textarea>
            </div>
            <div class="form-group">
                <label for="banner_path">Banner</label>
                <input type="file" class="form-control" id="banner_path" name="banner_path" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
