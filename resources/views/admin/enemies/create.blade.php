@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Enemigo</h1>

    <form action="{{ route('enemy.store') }}" method="post" encrypte="multipart/form-data">
        @csrf
        <!--accion sale del controlador de hero-->
        @include('admin.enemies.form')

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
