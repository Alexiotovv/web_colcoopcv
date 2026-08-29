@csrf

<div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
        <h5 class="mb-3">Datos del usuario</h5>
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nombre <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $usuario->name ?? '') }}" required autofocus>
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Correo electrónico <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $usuario->email ?? '') }}" required>
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-8">
                <label class="form-label">
                    Contraseña
                    @if (isset($usuario))
                        <small class="text-muted">(déjala vacía para no cambiarla)</small>
                    @else
                        <span class="text-danger">*</span>
                    @endif
                </label>
                <div class="input-group">
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" {{ isset($usuario) ? '' : 'required' }}>
                    <button type="button" class="btn btn-outline-secondary" id="btn-ver-password" onclick="togglePassword()" title="Mostrar/ocultar contraseña">👁️</button>
                    <button type="button" class="btn btn-outline-secondary" id="btn-copiar-password" onclick="copiarPassword()" title="Copiar contraseña">📋</button>
                    @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-text small">Mínimo 8 caracteres. Puedes generar una contraseña de seguridad media con el botón de al lado.</div>
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="button" class="btn btn-outline-primary w-100" onclick="generarPassword()">
                    <i class="bi bi-shuffle me-1"></i> Generar contraseña
                </button>
            </div>
        </div>
    </div>
</div>

<div class="mb-4">
    <button type="submit" class="btn btn-primary">
        <i class="bi bi-save me-1"></i> Guardar
    </button>
    <a href="{{ route('admin.usuarios.index') }}" class="btn btn-outline-secondary">Cancelar</a>
</div>

<script>
    function generarPassword() {
        const mayusculas = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
        const minusculas = 'abcdefghijkmnpqrstuvwxyz';
        const numeros = '23456789';
        const simbolos = '!@#$%*';
        const todos = mayusculas + minusculas + numeros + simbolos;

        const aleatorio = (fuente) => fuente[Math.floor(Math.random() * fuente.length)];

        let caracteres = [
            aleatorio(mayusculas),
            aleatorio(minusculas),
            aleatorio(numeros),
            aleatorio(simbolos),
        ];

        for (let i = 0; i < 6; i++) {
            caracteres.push(aleatorio(todos));
        }

        // Mezclar los caracteres para que no sigan un patrón fijo
        for (let i = caracteres.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [caracteres[i], caracteres[j]] = [caracteres[j], caracteres[i]];
        }

        const input = document.getElementById('password');
        input.value = caracteres.join('');
        input.type = 'text';
        document.getElementById('btn-ver-password').textContent = '🙈';
    }

    function togglePassword() {
        const input = document.getElementById('password');
        const boton = document.getElementById('btn-ver-password');

        if (input.type === 'password') {
            input.type = 'text';
            boton.textContent = '🙈';
        } else {
            input.type = 'password';
            boton.textContent = '👁️';
        }
    }

    function copiarPassword() {
        const input = document.getElementById('password');

        if (! input.value) {
            return;
        }

        navigator.clipboard.writeText(input.value).then(() => {
            const boton = document.getElementById('btn-copiar-password');
            const original = boton.textContent;
            boton.textContent = '✅';
            setTimeout(() => { boton.textContent = original; }, 1500);
        });
    }
</script>
