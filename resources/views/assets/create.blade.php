<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Asset</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
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
                    <a class="nav-link" href="{{ url('/assets') }}">Cadastro de Ativos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Relatórios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Configurações</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://via.placeholder.com/40" class="rounded-circle" alt="Avatar"> Usuário
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="#">Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <h1 class="mb-4">Create New Asset</h1>
        <form action="{{ route('assets.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="serial_number">Serial Number:</label>
                <input type="text" id="serial_number" name="serial_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="acquisition_date">Acquisition Date:</label>
                <input type="date" id="acquisition_date" name="acquisition_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="acquisition_value">Acquisition Value:</label>
                <input type="number" id="acquisition_value" name="acquisition_value" step="0.01"
                    class="form-control" required>
            </div>
            <div class="form-group">
                <label for="useful_life">Useful Life (in years):</label>
                <input type="number" id="useful_life" name="useful_life" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" id="category" name="category" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="supplier">Supplier:</label>
                <input type="text" id="supplier" name="supplier" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Asset</button>
        </form>
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
