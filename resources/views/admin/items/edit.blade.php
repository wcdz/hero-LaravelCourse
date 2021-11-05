@extends('layouts.app')

@section('content')
    <h1>Editar Item - {{ $item->name }}</h1>

    <form action="{{ route('item.update', ['item' => $item->id]) }}" method="post">
        <!--se tiene que pasar id del heroe para update-->
        @csrf
        @method('PUT')
        <!--update-->
        <!--accion sale del controlador de hero-->
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" value="{{ $item->name }}" name="name"
                placeholder="Ingrese un nombre" required>
        </div>

        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" value="{{ $item->hp }}"
                placeholder="Ingrese los puntos de vida" required>
        </div>

        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq" name="atq" value="{{ $item->atq }}"
                placeholder="Ingrese los puntos de ataque" required>
        </div>

        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" name="def" value="{{ $item->def }}"
                placeholder="Ingrese los puntos de defensa" required>
        </div>

        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" value="{{ $item->luck }}"
                placeholder="Ingrese los puntos de suerte" required>
        </div>

        <div class="form-group">
            <label for="coins">Monedas</label>
            <input type="number" class="form-control" id="cost" name="cost" value="{{ $item->cost }}"
                placeholder="Ingrese la cantidad de monedas" required>
        </div>

        <button type="submit" class="btn btn-warning">Actualizar</button>
    </form>
@endsection