@extends('layouts.layout')

@section('contenido')
<h2>Nuevo Producto</h2>
<form action="{{ route('productos.store') }}" method="POST"> @csrf

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" autocomplete="off" required><br>

    <label for="marca">Marca</label>
    <input type="text" name="marca"><br>

    <label for="precio">Precio</label>
    <input type="number" name="precio" autocomplete="off" required><br>

    <label for="stock">Stock</label>
                        <input type="number" name="stock" autocomplete="off" required><br>

    <label for="id_categoria">Categoría</label>
    <select name="id_categoria" required>
        <option value="">[ SELECCIONE ]</option> @foreach ($categorias as $item)
        <option value="{{ $item->id_categoria }}">{{ $item->descripcion }}</option> @endforeach
    </select><br>

    <button type="submit">Enviar</button>
    <a href="{{ route('productos.index') }}">Regresar</a>
</form> 
@endsection