@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row g-4">
    <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Procesos de admisión registrados</h6>
                <h2 class="mb-0">{{ $totalProcesos }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Proceso activo</h6>
                @if ($procesoActivo)
                    <h2 class="mb-0">Admisión {{ $procesoActivo->year }}</h2>
                @else
                    <p class="mb-0 text-danger">No hay ningún proceso activo</p>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="mt-4">
    <a href="{{ route('admin.admision.index') }}" class="btn btn-primary">
        <i class="bi bi-mortarboard me-1"></i> Gestionar Admisión
    </a>
</div>
@endsection
