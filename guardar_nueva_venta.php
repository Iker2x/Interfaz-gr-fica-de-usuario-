<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fecha_venta = $conexion->real_escape_string($_POST['fecha_venta']);
    $cantidad = $conexion->real_escape_string($_POST['cantidad']);
    $producto = $conexion->real_escape_string($_POST['producto']);
    $Id_Cliente = $conexion->real_escape_string($_POST['Id_Cliente']);
    $Id_Vendedor = $conexion->real_escape_string($_POST['Id_Vendedor']);
    $total = $conexion->real_escape_string($_POST['total']);

    $query = "INSERT INTO formulario de nueva venta (Fecha Venta, Cantidad, Producto, ID Cliente, ID Vendedor, Total) 
              VALUES ('$fecha_venta', '$cantidad', '$producto', '$Id_Cliente', '$Id_Vendedor', '$total')";

    if ($conexion->query($query) === TRUE) {
        echo "Venta guardada correctamente.";
    } else {
        echo "Error: " . $conexion->error;
    }

    $conexion->close();
}
?>