@extends('layouts.admin')

@section('title', 'Nuevo proceso de admisión')

@section('content')
<h4 class="mb-4">Nuevo proceso de admisión</h4>

<form method="POST" action="{{ route('admin.admision.store') }}" enctype="multipart/form-data">
    @include('admin.admission._form')
</form>
@endsection
