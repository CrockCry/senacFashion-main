@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adicionar Estilista</h1>
        <form action="{{ route('dashboard.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="imagem_path">Imagem:</label>
                <input type="text" class="form-control" id="imagem_path" name="imagem_path">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
