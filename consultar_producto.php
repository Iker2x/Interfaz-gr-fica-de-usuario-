<?php
include 'conexion.php';

// Revisa si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $conexion->real_escape_string($_POST['nombre']);  // Escapar el valor para mayor seguridad

    // Revisa el nombre de la tabla. Aquí se supone que la tabla es 'formulario_producto' (sin espacios).
    $query = "SELECT Precio, Stock, Codigo_barras, Categoria FROM formulario de producto WHERE Nombre='$nombre'";
    $result = $conexion->query($query);

    // Comprueba si se encontraron resultados
    if ($result->num_rows > 0) {
        $producto = $result->fetch_assoc();
        echo json_encode($producto);  // Devuelve los datos del producto en formato JSON
    } else {
        echo json_encode(['error' => 'Producto no encontrado.']);
    }

    $conexion->close();  // Cierra la conexión
}
?>