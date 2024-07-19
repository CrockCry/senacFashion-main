{{-- @extends('layouts.app')

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
                <th>Status</th>
                <th>Ações</th>
            </tr>
            @foreach ($estilistas as $estilista)
            <tr>
                <td>{{ $estilista->id }}</td>
                <td>{{ $estilista->nome }}</td>
                <td><img src="{{ asset($estilista->imagem_path) }}" width="100"></td>
                <td>{{ $estilista->status ? 'Ativo' : 'Inativo' }}</td>
                <td>
                    <form action="{{ route('dashboard.destroy', $estilista->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('dashboard.edit', $estilista->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                    <form action="{{ route('dashboard.toggleStatus', $estilista->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-warning">
                            {{ $estilista->status ? 'Desativar' : 'Ativar' }}
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection --}}


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
                <th>Status</th>
                <th>Ações</th>
            </tr>
            @foreach ($estilistas as $estilista)
            <tr>
                <td>{{ $estilista->id }}</td>
                <td>{{ $estilista->nome }}</td>
                <td><img src="{{ asset($estilista->imagem_path) }}" width="100"></td>
                <td>{{ $estilista->status ? 'Ativo' : 'Inativo' }}</td>
                <td>
                    <form action="{{ route('dashboard.destroy', $estilista->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('dashboard.edit', $estilista->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                    <form action="{{ route('dashboard.toggleStatus', $estilista->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-warning">
                            {{ $estilista->status ? 'Desativar' : 'Ativar' }}
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        <h1>Banners</h1>
        <a class="btn btn-success" href="{{ route('dashboard.createBanner') }}">Adicionar Banner</a>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Caminho do Banner</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            @foreach ($banners as $banner)
            <tr>
                <td>{{ $banner->id }}</td>
                <td>{{ $banner->banner_path }}</td>
                <td>{{ $banner->status ? 'Ativo' : 'Inativo' }}</td>
                <td>
                    <form action="{{ route('dashboard.destroyBanner', $banner->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('dashboard.editBanner', $banner->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                    <form action="{{ route('dashboard.toggleStatusBanner', $banner->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-warning">
                            {{ $banner->status ? 'Desativar' : 'Ativar' }}
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
