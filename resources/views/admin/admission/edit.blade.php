@extends('layouts.admin')

@section('title', 'Editar proceso de admisión')

@section('content')
<h4 class="mb-4">Editar proceso de admisión {{ $proceso->year }}</h4>

<form method="POST" action="{{ route('admin.admision.update', $proceso) }}" enctype="multipart/form-data">
    @method('PUT')
    @include('admin.admission._form')
</form>
@endsection
