<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fecha_venta = $conexion->real_escape_string($_POST['fecha_venta']);

    // Realiza la consulta
    $query = "SELECT Cantidad, Producto, `ID Cliente`, `ID Vendedor`, Total FROM `formulario de nueva venta` WHERE `Fecha Venta`='$fecha_venta'";
    $result = $conexion->query($query);

    if ($result->num_rows > 0) {
        $venta = $result->fetch_assoc();
        echo json_encode([
            'cantidad' => $venta['Cantidad'],
            'producto' => $venta['Producto'],
            'Id_Cliente' => $venta['ID Cliente'],
            'Id_Vendedor' => $venta['ID Vendedor'],
            'total' => $venta['Total']
        ]);
    } else {
        echo json_encode(['error' => 'Venta no encontrada.']);
    }

    $conexion->close();
}
?>
