<!-- resources/views/assets/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detalhes do Ativo')

@section('content')
    <h1>Detalhes do Ativo</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nome:</strong> {{ $asset->name }}</li>
        <li class="list-group-item"><strong>Descrição:</strong> {{ $asset->description }}</li>
        <li class="list-group-item"><strong>Número de Série:</strong> {{ $asset->serial_number }}</li>
        <li class="list-group-item"><strong>Data de Aquisição:</strong> {{ $asset->acquisition_date }}</li>
        <li class="list-group-item"><strong>Valor de Aquisição:</strong> {{ $asset->acquisition_value }}</li>
        <li class="list-group-item"><strong>Vida Útil:</strong> {{ $asset->useful_life }} anos</li>
        <li class="list-group-item"><strong>Localização:</strong> {{ $asset->location }}</li>
        <li class="list-group-item"><strong>Categoria:</strong> {{ $asset->category }}</li>
        <li class="list-group-item"><strong>Fornecedor:</strong> {{ $asset->supplier }}</li>
    </ul>
    <a href="{{ route('assets.edit', $asset->id) }}" class="btn btn-warning mt-3">Editar</a>
    <form action="{{ route('assets.destroy', $asset->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-3"
            onclick="return confirm('Are you sure you want to delete this asset?');">Deletar</button>
    </form>
@endsection
