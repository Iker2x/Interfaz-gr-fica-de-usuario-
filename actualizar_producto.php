<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Escapar valores para prevenir inyecciones SQL
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $precio = $conexion->real_escape_string($_POST['precio']);
    $stock = $conexion->real_escape_string($_POST['stock']);
    $codigo_barras = $conexion->real_escape_string($_POST['codigo_barras']);
    $categoria = $conexion->real_escape_string($_POST['categoria']);

    // Asegúrate de que el nombre de la tabla sea correcto
    $query = "UPDATE `formulario de producto` SET Precio='$precio', Stock='$stock', Categoria='$categoria' 
              WHERE Nombre='$nombre' AND Codigo_barras='$codigo_barras'";

    // Ejecuta la consulta y verifica si se ha actualizado correctamente
    if ($conexion->query($query) === TRUE) {
        echo "Producto actualizado correctamente.";
    } else {
        echo "Error: " . $conexion->error;
    }

    // Cierra la conexión
    $conexion->close();
}
?>
