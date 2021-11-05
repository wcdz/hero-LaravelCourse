@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Item</h1>

    <form action="{{ route('item.store') }}" method="post">
        @csrf
        <!--accion sale del controlador de hero-->
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese un nombre" required>
        </div>

        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" placeholder="Ingrese los puntos de vida" min=0
                required>
        </div>

        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq" name="atq" placeholder="Ingrese los puntos de ataque" min=0
                required>
        </div>

        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" name="def" placeholder="Ingrese los puntos de defensa" min=0
                required>
        </div>

        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" placeholder="Ingrese los puntos de suerte"
                min=0 required>
        </div>

        <div class="form-group">
            <label for="coins">Precio</label>
            <input type="number" class="form-control" id="cost" name="cost" placeholder="Ingrese el precio del item" min=0
                required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection