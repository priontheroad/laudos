<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sistema de Laudos')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            margin-bottom: 20px;
        }
        footer {
            margin-top: 30px;
            padding: 10px;
            text-align: center;
            background-color: #f1f1f1;
            border-top: 1px solid #e5e5e5;
        }
    </style>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Sistema de Laudos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('laudos.index') }}">Laudos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('empresas.index') }}">Empresas</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="container">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer>
        <p>© {{ date('Y') }} - Sistema de Laudos. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
