<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos CSS mencionados anteriormente */
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
            margin-top: 70px;
            /* Para evitar que o conteúdo fique escondido atrás da navbar */
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        nav.navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
    </style>
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
        <h1>Detalhes do Ativo</h1>
        <div class="card">
            <div class="card-header">
                <h2>{{ $asset->name }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $asset->description }}</p>
                <p><strong>Serial Number:</strong> {{ $asset->serial_number }}</p>
                <p><strong>Acquisition Date:</strong> {{ $asset->acquisition_date->format('d/m/Y') }}</p>
                <p><strong>Acquisition Value:</strong> R$ {{ number_format($asset->acquisition_value, 2, ',', '.') }}
                </p>
                <p><strong>Useful Life:</strong> {{ $asset->useful_life }} years</p>
                <p><strong>Location:</strong> {{ $asset->location }}</p>
                <p><strong>Category:</strong> {{ $asset->category }}</p>
                <p><strong>Supplier:</strong> {{ $asset->supplier }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('assets.edit', $asset) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('assets.destroy', $asset) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('assets.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p>&copy; 2024 Sistema de Gestão de Ativos. Todos os direitos reservados.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
