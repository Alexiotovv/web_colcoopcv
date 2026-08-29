<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panel administrativo') - Colcoop CV</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #23a32a;
            --primary-dark: #1b3e5e;
        }
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f5f6f8;
        }
        h1, h2, h3, h4, h5, h6 { font-family: 'Poppins', sans-serif; font-weight: 600; }
        .sidebar {
            background-color: var(--primary-dark);
            min-height: 100vh;
            color: #fff;
        }
        .sidebar .brand {
            padding: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.85);
            padding: 12px 20px;
            border-radius: 0;
        }
        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background-color: var(--primary-color);
            color: #fff;
        }
        .topbar {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            padding: 15px 25px;
        }
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }
        .content-area { padding: 25px; }
    </style>
    @stack('styles')
</head>
<body>
    <div class="d-flex">
        <nav class="sidebar" style="width: 250px;">
            <div class="brand text-center">
                <i class="bi bi-mortarboard-fill fs-2"></i>
                <h5 class="mt-2 mb-0">Colcoop CV</h5>
            </div>
            <ul class="nav flex-column mt-3">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-speedometer2 me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.admision.*') ? 'active' : '' }}" href="{{ route('admin.admision.index') }}">
                        <i class="bi bi-mortarboard me-2"></i> Admisión
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.usuarios.*') ? 'active' : '' }}" href="{{ route('admin.usuarios.index') }}">
                        <i class="bi bi-people me-2"></i> Usuarios
                    </a>
                </li>
            </ul>
        </nav>
        <div class="flex-grow-1">
            <div class="topbar d-flex justify-content-between align-items-center">
                <h5 class="mb-0">@yield('title', 'Panel administrativo')</h5>
                <div class="d-flex align-items-center gap-3">
                    <span><i class="bi bi-person-circle me-1"></i> {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-box-arrow-right"></i> Salir
                        </button>
                    </form>
                </div>
            </div>
            <div class="content-area">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
