@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Estilista</h1>
        <form action="{{ route('dashboard.update', $estilista->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $estilista->nome }}">
            </div>
            <div class="form-group">
                <label for="imagem_path">Imagem:</label>
                <input type="text" class="form-control" id="imagem_path" name="imagem_path" value="{{ $estilista->imagem_path }}">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection
