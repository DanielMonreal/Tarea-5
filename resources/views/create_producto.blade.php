<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
</head>
<body>
    <h1>Agregar Nuevo Producto</h1>
    
    <!-- Aquí va tu formulario para agregar productos -->
    <form action="/productos" method="post">
        @csrf
        <!-- Campos del formulario -->
        <input type="text" name="nombre" placeholder="Nombre del producto"><br>
        <input type="text" name="precio" placeholder="Precio del producto"><br>
        <textarea name="descripcion" placeholder="Descripción del producto"></textarea><br>
        <button type="submit">Agregar Producto</button>
    </form>
</body>
</html>
