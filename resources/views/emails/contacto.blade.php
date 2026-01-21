<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuevo mensaje de contacto - Colegio Cooperativo César Vallejo</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #1a4f8c; color: white; padding: 20px; text-align: center; }
        .content { background: #f8f9fa; padding: 20px; border-radius: 5px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #1a4f8c; }
        .footer { margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Nuevo Mensaje de Contacto</h2>
            <p>Colegio Cooperativo "César Vallejo"</p>
        </div>
        
        <div class="content">
            <div class="field">
                <span class="label">Fecha y Hora:</span>
                <span>{{ $datos['fecha'] }}</span>
            </div>
            
            <div class="field">
                <span class="label">Nombre:</span>
                <span>{{ $datos['nombre'] }}</span>
            </div>
            
            <div class="field">
                <span class="label">Email:</span>
                <span>{{ $datos['email'] }}</span>
            </div>
            
            <div class="field">
                <span class="label">Teléfono:</span>
                <span>{{ $datos['telefono'] ?? 'No proporcionado' }}</span>
            </div>
            
            <div class="field">
                <span class="label">Asunto:</span>
                <span>{{ $datos['asunto'] }}</span>
            </div>
            
            <div class="field">
                <span class="label">Mensaje:</span>
                <div style="background: white; padding: 15px; border-radius: 5px; margin-top: 5px;">
                    {{ nl2br($datos['mensaje']) }}
                </div>
            </div>
            
            <div class="field">
                <span class="label">Información Técnica:</span>
                <div style="font-size: 12px; color: #666;">
                    IP: {{ $datos['ip'] }}<br>
                    Navegador: {{ $datos['user_agent'] }}
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>Este mensaje fue enviado desde el formulario de contacto del sitio web.</p>
            <p>Colegio Cooperativo "César Vallejo" - Jirón Putumayo N°966, Iquitos</p>
        </div>
    </div>
</body>
</html>