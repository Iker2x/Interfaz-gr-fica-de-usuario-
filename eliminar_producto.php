<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $codigo_barras = $_POST['codigo_barras'];

    // Colocar el nombre de la tabla entre comillas invertidas para evitar errores de sintaxis
    $query = "DELETE FROM formulario de producto WHERE Nombre='$nombre' AND Codigo_barras='$codigo_barras'";

    if ($conexion->query($query) === TRUE) {
        echo "Producto eliminado correctamente.";
    } else {
        echo "Error: " . $conexion->error;
    }

    $conexion->close();
}

?>