<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Escapa los valores para prevenir inyecciones SQL
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $precio = $conexion->real_escape_string($_POST['precio']);
    $stock = $conexion->real_escape_string($_POST['stock']);
    $codigo_barras = $conexion->real_escape_string($_POST['codigo_barras']);
    $categoria = $conexion->real_escape_string($_POST['categoria']);

    // Asegúrate de que el nombre de la tabla sea correcto
    $query = "INSERT INTO formulario de producto (Nombre, Precio, Stock, Codigo_barras, Categoria) 
              VALUES ('$nombre', '$precio', '$stock', '$codigo_barras', '$categoria')";

    // Ejecuta la consulta y verifica si se ha insertado correctamente
    if ($conexion->query($query) === TRUE) {
        echo "Producto guardado correctamente.";
    } else {
        echo "Error: " . $conexion->error;
    }

    // Cierra la conexión
    $conexion->close();
}
?>