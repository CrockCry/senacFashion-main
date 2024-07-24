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
        <h1>Dashboard</h1>

        <h2>Estilistas</h2>
        <a href="{{ route('dashboard.estilista.create') }}" class="btn btn-success">Adicionar Estilista</a>
        @foreach($estilistas as $estilista)
            <div class="card mt-2">
                <img class="card-img-top" src="{{ asset('storage/' . $estilista->imagem_path) }}" alt="Imagem">
                <div class="card-body">
                    <h5 class="card-title">{{ $estilista->nome }}</h5>
                    <form action="{{ route('dashboard.toggleStatus', $estilista->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-{{ $estilista->status ? 'danger' : 'success' }}">
                            {{ $estilista->status ? 'Desativar' : 'Ativar' }}
                        </button>
                    </form>
                    <a href="{{ route('dashboard.estilista.edit', $estilista->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('dashboard.destroy', $estilista->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        @endforeach

        <h2>Banners</h2>
        <a href="{{ route('dashboard.bannerHome.createBanner') }}" class="btn btn-success">Adicionar Banner</a>
        @foreach($banners as $banner)
            <div class="card mt-2">
                <img class="card-img-top" src="{{ asset('storage/' . $banner->imagem_path) }}" alt="Banner">
                <div class="card-body">
                    <h5 class="card-title">{{ $banner->titulo }}</h5>
                    <form action="{{ route('dashboard.toggleStatusBanner', $banner->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-{{ $banner->status ? 'danger' : 'success' }}">
                            {{ $banner->status ? 'Desativar' : 'Ativar' }}
                        </button>
                    </form>
                    <a href="{{ route('dashboard.bannerHome.editBanner', $banner->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('dashboard.destroyBanner', $banner->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        @endforeach

        <h2>Desfiles</h2>
        <a href="{{ route('dashboard.createDesfile') }}" class="btn btn-success">Adicionar Desfile</a>
        @foreach($desfiles as $desfile)
            <div class="card mt-2">
                <img class="card-img-top" src="{{ asset('storage/' . $desfile->banner_path) }}" alt="Banner do Desfile">
                <div class="card-body">
                    <h5 class="card-title">{{ $desfile->titulo }}</h5>
                    <form action="{{ route('dashboard.toggleStatusDesfile', $desfile->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-{{ $desfile->status ? 'danger' : 'success' }}">
                            {{ $desfile->status ? 'Desativar' : 'Ativar' }}
                        </button>
                    </form>
                    <a href="{{ route('dashboard.editDesfile', $desfile->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('dashboard.destroyDesfile', $desfile->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
