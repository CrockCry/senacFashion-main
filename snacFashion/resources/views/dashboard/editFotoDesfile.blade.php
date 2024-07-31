@extends('layouts.app')

@section('content')
    <h1>Adicionar Foto ao Desfile</h1>
    <form action="{{ route('dashboard.updateFotoDesfile', ['id' => $fotoDesfile->id, 'desfileId' => $desfileId]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="foto_path">Foto:</label>
            <input type="file" id="foto_path" name="foto_path" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select id="status" name="status" class="form-control">
                <option value="1" {{ $fotoDesfile->status ? 'selected' : '' }}>Ativo</option>
                <option value="0" {{ !$fotoDesfile->status ? 'selected' : '' }}>Inativo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
@endsection
