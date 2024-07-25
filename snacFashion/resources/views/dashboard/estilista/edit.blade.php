@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Estilista</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.estilista.update', $estilista->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $estilista->nome) }}">
            </div>
            <div class="form-group">
                <label for="imagem_path">Imagem:</label>
                <input type="file" name="imagem_path" id="imagem_path" class="form-control">
                <img src="{{ asset('storage/' . $estilista->imagem_path) }}" width="100" alt="Imagem atual">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ $estilista->status ? 'selected' : '' }}>Ativo</option>
                    <option value="0" {{ !$estilista->status ? 'selected' : '' }}>Inativo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection
