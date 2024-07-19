@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Estilistas</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <a class="btn btn-success" href="{{ route('dashboard.create') }}">Adicionar Estilista</a>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
            @foreach ($estilistas as $estilista)
            <tr>
                <td>{{ $estilista->id }}</td>
                <td>{{ $estilista->nome }}</td>
                <td><img src="{{ asset($estilista->imagem_path) }}" width="100"></td>
                <td>
                    <form action="{{ route('dashboard.destroy', $estilista->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('dashboard.edit', $estilista->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
