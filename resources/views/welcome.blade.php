<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tu Sistema de Obras y Exposiciones</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://via.placeholder.com/1920x1080');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .nav-btn {
            margin: 0 10px;
            padding: 10px 25px;
            font-size: 1.1rem;
            transition: all 0.3s;
        }
        .nav-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <div>
            <h1 class="display-3 mb-4">Sistema de Gestión</h1>
            <p class="lead mb-5">Administra tus obras y exposiciones de manera eficiente</p>
            
            <div class="d-flex justify-content-center">
                <a href="{{ route('obras.index') }}" class="btn btn-primary nav-btn">
                    <i class="fas fa-paint-brush me-2"></i> Obras
                </a>
                <a href="{{ route('exposiciones.index') }}" class="btn btn-success nav-btn">
                    <i class="fas fa-images me-2"></i> Exposiciones
                </a>
                
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-light nav-btn">
                        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-light nav-btn">
                        <i class="fas fa-sign-in-alt me-2"></i> Iniciar Sesión
                    </a>
                @endauth
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>