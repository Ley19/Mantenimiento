<?php 
    include("conexion.php");
    $con=conectar();

// Verificar conexión
    if (!$con) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Obtener el código del producto
     $codigo = mysqli_real_escape_string($con, $_POST["codigo"]);

    // Realizar la búsqueda en la base de datos
    $resultado = mysqli_query($con, "SELECT producto, descripcion, precio FROM productos WHERE codigo = '$codigo'");
    $fila = mysqli_fetch_assoc($resultado);

    // Devolver la información del producto como un objeto JSON
    header("Content-Type: application/json");
    echo json_encode($fila);
?>