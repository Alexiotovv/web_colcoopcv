<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página no encontrada - Colegio Cooperativo César Vallejo</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #23a32a;
            --primary-dark: #1b3e5e;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .error-container {
            text-align: center;
            max-width: 600px;
            padding: 40px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.8s ease-out;
        }
        
        .error-icon {
            font-size: 6rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .error-code {
            font-size: 5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 10px;
            line-height: 1;
        }
        
        .error-title {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .error-message {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        
        .error-actions {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn-error {
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        
        .btn-error-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            border: none;
        }
        
        .btn-error-secondary {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }
        
        .btn-error:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            color: white;
            background: var(--primary-dark);
        }
        
        .error-footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #888;
            font-size: 0.9rem;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .error-container {
                padding: 30px 20px;
            }
            
            .error-code {
                font-size: 4rem;
            }
            
            .error-title {
                font-size: 1.7rem;
            }
            
            .error-message {
                font-size: 1.1rem;
            }
            
            .error-actions {
                flex-direction: column;
            }
            
            .btn-error {
                width: 100%;
                justify-content: center;
            }
        }
        
        @media (max-width: 576px) {
            .error-code {
                font-size: 3rem;
            }
            
            .error-title {
                font-size: 1.5rem;
            }
            
            .error-icon {
                font-size: 4rem;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-icon">
            <i class="bi bi-exclamation-triangle"></i>
        </div>
        
        <div class="error-code">404</div>
        
        <h1 class="error-title">Página no encontrada</h1>
        
        <p class="error-message">
            Lo sentimos, la página que estás buscando no existe o ha sido movida.
            Puede que haya un error en la dirección o la página haya sido eliminada.
        </p>
        
        <div class="error-actions">
            <a href="{{ url('/') }}" class="btn-error btn-error-primary">
                <i class="bi bi-house-door"></i>
                Volver al Inicio
            </a>
            
            <a href="javascript:history.back()" class="btn-error btn-error-secondary">
                <i class="bi bi-arrow-left"></i>
                Volver atrás
            </a>
        </div>
        
        <div class="error-footer">
            <p>
                <strong>Colegio Cooperativo "César Vallejo"</strong><br>
                Si crees que esto es un error, por favor contacta con la administración.
            </p>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Animación adicional para los botones
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn-error');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-3px)';
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
</body>
</html>