@extends('layouts.layout')

@section('contenido')
<h2>Editar Producto</h2>
<form action="{{ route('productos.update',
['producto' => $producto->id_producto]) }}"
method="POST"> @csrf @method('PATCH')

<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{ $producto->nombre }}"
autocomplete="off" required><br>

<label for="marca">Marca</label>
<input type="text" name="marca" value="{{ $producto->marca }}"><br>

<label for="precio">Precio</label>
<input type="number" name="precio" value="{{ $producto->precio }}"
autocomplete="off" required><br>

<label for="stock">Stock</label>
<input type="number" name="stock" value="{{ $producto->stock }}"
autocomplete="off" required><br>

<label for="id_categoria">Categoría</label>
<select name="id_categoria" required>
<option value="">[ SELECCIONE ]</option> 

@foreach ($categorias as $item)
    <option value="{{ $item->id_categoria }}"
    @if ($item->id_categoria == $producto->id_categoria)
    {{ 'selected' }} @endif>
    {{ $item->descripcion }}
    </option> 
@endforeach
</select><br>

<button type="submit">Guardar</button>
<a href="{{ route('productos.index') }}">Regresar</a>
</form> @endsection
