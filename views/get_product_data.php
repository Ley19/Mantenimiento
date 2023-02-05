<?php

    header("Content-Type: application/json; charset=UTF-8");

    include("conexion.php");
        $con=conectar();


    if (!$con) {
    die("Error al conectar: " . mysqli_connect_error());
    }

    $idProducto = $_GET['id_producto'];

    $query = "SELECT concepto, descripcion, precioVenta FROM productos WHERE id_producto = '$idProducto'";
    $result = mysqli_query($con, $query);

    $productData = mysqli_fetch_assoc($result);

    echo json_encode($productData);

    mysqli_close($con);

?>