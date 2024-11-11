<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fecha_venta = $conexion->real_escape_string($_POST['fecha_venta']);

    $query = "DELETE FROM formulario de nueva venta WHERE Fecha Venta='$fecha_venta'";

    if ($conexion->query($query) === TRUE) {
        echo "Venta eliminada correctamente.";
    } else {
        echo "Error: " . $conexion->error;
    }

    $conexion->close();
}
?>