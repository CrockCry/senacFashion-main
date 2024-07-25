@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Desfiles</h2>
        <a href="{{ route('dashboard.createDesfile') }}" class="btn btn-success">Adicionar Desfile</a>
        @foreach($desfiles as $desfile)
            <div class="card mt-2" style="display: flex; flex-direction: row">
                {{-- <img class="card-img-top" src="{{ asset('storage/' . $desfile->banner_path) }}" alt="Banner do Desfile"> --}}
                <div class="card-body">
                    <h5 class="card-title">{{ $desfile->titulo_desfile }}</h5>
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
                        <button type="submit" class="btn btn-danger btn-delete" data-action="{{ route('dashboard.destroyDesfile', $desfile->id) }}">Excluir</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
