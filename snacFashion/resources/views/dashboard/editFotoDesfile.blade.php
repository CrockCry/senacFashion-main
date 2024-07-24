@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Foto do Desfile</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.updateFotoDesfile', $fotoDesfile->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="foto_path">Foto</label>
                <input type="file" class="form-control" id="foto_path" name="foto_path">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="1" {{ $fotoDesfile->status ? 'selected' : '' }}>Ativo</option>
                    <option value="0" {{ !$fotoDesfile->status ? 'selected' : '' }}>Inativo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
