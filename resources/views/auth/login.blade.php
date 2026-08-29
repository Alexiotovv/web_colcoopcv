<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Colegio Cooperativo César Vallejo</title>
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
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }
        .login-header {
            background-color: var(--primary-color);
            color: #fff;
            padding: 30px;
            text-align: center;
        }
        .login-header i {
            font-size: 3rem;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card login-card">
                    <div class="login-header">
                        <i class="bi bi-mortarboard-fill"></i>
                        <h4 class="mt-2 mb-0">Colegio Cooperativo César Vallejo</h4>
                        <p class="mb-0">Panel administrativo</p>
                    </div>
                    <div class="card-body p-4">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login.submit') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Recordarme</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Iniciar sesión
                            </button>
                        </form>
                    </div>
                </div>
                <p class="text-center text-white mt-3">
                    <a href="{{ route('inicio') }}" class="text-white">
                        <i class="bi bi-arrow-left me-1"></i> Volver al sitio web
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
