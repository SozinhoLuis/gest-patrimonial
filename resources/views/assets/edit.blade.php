<!-- resources/views/assets/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar Ativo')

@section('content')
    <h1>Editar Ativo</h1>
    <form action="{{ route('assets.update', $asset->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $asset->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea class="form-control" id="description" name="description">{{ $asset->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="serial_number">Número de Série:</label>
            <input type="text" class="form-control" id="serial_number" name="serial_number"
                value="{{ $asset->serial_number }}" required>
        </div>
        <div class="form-group">
            <label for="acquisition_date">Data de Aquisição:</label>
            <input type="date" class="form-control" id="acquisition_date" name="acquisition_date"
                value="{{ $asset->acquisition_date }}" required>
        </div>
        <div class="form-group">
            <label for="acquisition_value">Valor de Aquisição:</label>
            <input type="number" class="form-control" id="acquisition_value" name="acquisition_value" step="0.01"
                value="{{ $asset->acquisition_value }}" required>
        </div>
        <div class="form-group">
            <label for="useful_life">Vida Útil (em anos):</label>
            <input type="number" class="form-control" id="useful_life" name="useful_life" value="{{ $asset->useful_life }}"
                required>
        </div>
        <div class="form-group">
            <label for="location">Localização:</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $asset->location }}"
                required>
        </div>
        <div class="form-group">
            <label for="category">Categoria:</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $asset->category }}"
                required>
        </div>
        <div class="form-group">
            <label for="supplier">Fornecedor:</label>
            <input type="text" class="form-control" id="supplier" name="supplier" value="{{ $asset->supplier }}"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
@endsection
