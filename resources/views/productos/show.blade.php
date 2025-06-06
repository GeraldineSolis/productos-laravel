@extends('layouts.layout')

@section('contenido')
<h2>Detalle del Producto</h2>

<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{ $producto->nombre }}" readonly><br>

<label for="marca">Marca</label>
<input type="text" name="marca" value="{{ $producto->marca }}" readonly><br>

<label for="precio">Precio</label>
<input type="number" name="precio" value="{{ $producto->precio }}" readonly><br>

<label for="stock">Stock</label>
<input type="number" name="stock" value="{{ $producto->stock }}" readonly><br>

<label for="marca">Categoría</label>
<input type="text" name="categoria" value="{{ $producto->categoria->descripcion }}" readonly><br>

<a href="{{ route('productos.edit', ['id' => $producto->id_producto]) }}">Editar</a> |
<a href="{{ route('productos.index') }}">Regresar</a>

@endsection
