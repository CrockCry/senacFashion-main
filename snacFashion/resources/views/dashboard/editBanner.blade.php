@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Banner</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('dashboard.updateBanner', $banner->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="banner_path">Caminho do Banner</label>
                <input type="text" name="banner_path" class="form-control" id="banner_path" value="{{ $banner->banner_path }}">
            </div>
            <button type="submit" class="btn btn-success">Atualizar</button>
        </form>
    </div>
@endsection
