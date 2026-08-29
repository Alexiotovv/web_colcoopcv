@extends('layouts.admin')

@section('title', 'Admisión')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Procesos de Admisión</h4>
    <a href="{{ route('admin.admision.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i> Nuevo proceso
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>Año</th>
                    <th>Fechas (badge)</th>
                    <th>Estado</th>
                    <th class="text-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($procesos as $proceso)
                    <tr>
                        <td class="fw-bold">{{ $proceso->year }}</td>
                        <td>{{ $proceso->badge_dates }}</td>
                        <td>
                            @if ($proceso->active)
                                <span class="badge bg-success">Activo</span>
                            @else
                                <span class="badge bg-secondary">Inactivo</span>
                            @endif
                        </td>
                        <td class="text-end">
                            @unless ($proceso->active)
                                <form action="{{ route('admin.admision.activate', $proceso) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-outline-success">
                                        <i class="bi bi-check-circle"></i> Activar
                                    </button>
                                </form>
                            @endunless
                            <a href="{{ route('admin.admision.edit', $proceso) }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            <form action="{{ route('admin.admision.destroy', $proceso) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar este proceso de admisión?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">No hay procesos de admisión registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
