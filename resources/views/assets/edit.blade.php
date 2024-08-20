<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Asset</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Sistema de Gestão de Ativos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('assets.index') }}">Cadastro de Ativos</a>
                </li>
                <!-- Outros itens do menu -->
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <h1>Edit Asset</h1>
        <form action="{{ route('assets.update', $asset) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control"
                    value="{{ old('name', $asset->name) }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control">{{ old('description', $asset->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="serial_number">Serial Number:</label>
                <input type="text" id="serial_number" name="serial_number" class="form-control"
                    value="{{ old('serial_number', $asset->serial_number) }}" required>
            </div>
            <div class="form-group">
                <label for="acquisition_date">Acquisition Date:</label>
                <input type="date" id="acquisition_date" name="acquisition_date" class="form-control"
                    value="{{ old('acquisition_date', $asset->acquisition_date->format('Y-m-d')) }}" required>
            </div>
            <div class="form-group">
                <label for="acquisition_value">Acquisition Value:</label>
                <input type="number" id="acquisition_value" name="acquisition_value" class="form-control"
                    value="{{ old('acquisition_value', $asset->acquisition_value) }}" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="useful_life">Useful Life (in years):</label>
                <input type="number" id="useful_life" name="useful_life" class="form-control"
                    value="{{ old('useful_life', $asset->useful_life) }}" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" class="form-control"
                    value="{{ old('location', $asset->location) }}" required>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" id="category" name="category" class="form-control"
                    value="{{ old('category', $asset->category) }}" required>
            </div>
            <div class="form-group">
                <label for="supplier">Supplier:</label>
                <input type="text" id="supplier" name="supplier" class="form-control"
                    value="{{ old('supplier', $asset->supplier) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Asset
