<!-- resources/views/assets/create.blade.php -->
@extends('layouts.app')

@section('title', 'Criar Novo Ativo')

@section('content')
    <h1>Criar Novo Ativo</h1>
    <form action="{{ route('assets.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="serial_number">Número de Série:</label>
            <input type="text" class="form-control" id="serial_number" name="serial_number" required>
        </div>
        <div class="form-group">
            <label for="acquisition_date">Data de Aquisição:</label>
            <input type="date" class="form-control" id="acquisition_date" name="acquisition_date" required>
        </div>
        <div class="form-group">
            <label for="acquisition_value">Valor de Aquisição:</label>
            <input type="number" class="form-control" id="acquisition_value" name="acquisition_value" step="0.01"
                required>
        </div>
        <div class="form-group">
            <label for="useful_life">Vida Útil (em anos):</label>
            <input type="number" class="form-control" id="useful_life" name="useful_life" required>
        </div>
        <div class="form-group">
            <label for="location">Localização:</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="form-group">
            <label for="category">Categoria:</label>
            <input type="text" class="form-control" id="category" name="category" required>
        </div>
        <div class="form-group">
            <label for="supplier">Fornecedor:</label>
            <input type="text" class="form-control" id="supplier" name="supplier" required>
        </div>
        <button type="submit" class="btn btn-success">Criar Ativo</button>
    </form>
@endsection
