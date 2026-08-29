@extends('layouts.admin')

@section('title', 'Usuarios')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Usuarios</h4>
    <a href="{{ route('admin.usuarios.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i> Nuevo usuario
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                    <th>Registrado</th>
                    <th class="text-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($usuarios as $usuario)
                    <tr>
                        <td class="fw-bold">{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->created_at?->format('d/m/Y') }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.usuarios.edit', $usuario) }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            @unless ($usuario->id === auth()->id())
                                <form action="{{ route('admin.usuarios.destroy', $usuario) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar este usuario?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            @endunless
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">No hay usuarios registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
