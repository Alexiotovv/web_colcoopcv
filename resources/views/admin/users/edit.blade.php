@extends('layouts.admin')

@section('title', 'Editar usuario')

@section('content')
<h4 class="mb-4">Editar usuario {{ $usuario->name }}</h4>

<form method="POST" action="{{ route('admin.usuarios.update', $usuario) }}">
    @method('PUT')
    @include('admin.users._form')
</form>
@endsection
