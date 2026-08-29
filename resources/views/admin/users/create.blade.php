@extends('layouts.admin')

@section('title', 'Nuevo usuario')

@section('content')
<h4 class="mb-4">Nuevo usuario</h4>

<form method="POST" action="{{ route('admin.usuarios.store') }}">
    @include('admin.users._form')
</form>
@endsection
