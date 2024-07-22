@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adicionar Banner</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="banner_path">Banner:</label>
                <input type="file" name="banner_path" id="banner_path" class="form-control">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
@endsection
