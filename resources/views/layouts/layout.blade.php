<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRODUCTOS</title>
</head>
<body>
    <h1>Productos</h1>
    <ul>
        <li><a href="{{ route('productos.index') }}">Productos</a></li>
        <li><a href="#">Categorías</a></li>
    </ul> 
    @yield('contenido')
</body>
</html>