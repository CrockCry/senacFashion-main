@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Banner</h1>
        <p>Status: {{ $banner->status ? 'Ativo' : 'Inativo' }}</p>
        <img src="{{ asset('assets/vid/' . $banner->banner_path) }}" alt="Banner" style="width: 100%; height: auto;">
        <!-- Adicione formulários para editar o banner aqui -->
    </div>
@endsection
