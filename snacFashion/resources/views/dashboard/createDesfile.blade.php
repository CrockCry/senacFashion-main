@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Criar Novo Desfile</h1>

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
                <label for="titulo_desfile">Título</label>
                <input type="text" class="form-control" id="titulo_desfile" name="titulo_desfile" value="{{ old('titulo_desfile') }}" required>
            </div>
            <div class="form-group">
                <label for="subtitulo_desfile">Subtítulo</label>
                <input type="text" class="form-control" id="subtitulo_desfile" name="subtitulo_desfile" value="{{ old('subtitulo_desfile') }}" required>
            </div>
            <div class="form-group">
                <label for="data_desfile">Data do Evento</label>
                <input type="date" class="form-control" id="data_desfile" name="data_desfile" value="{{ old('data_desfile') }}" required>
            </div>
            <div class="form-group">
                <label for="sobre_desfile">Sobre o Evento</label>
                <textarea class="form-control" id="sobre_desfile" name="sobre_desfile" required>{{ old('sobre_desfile') }}</textarea>
            </div>
            <div class="form-group">
                <label for="banner_desfile">Banner</label>
                <input type="file" class="form-control" id="banner_desfile" name="banner_desfile" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Ativo</option>
                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inativo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
