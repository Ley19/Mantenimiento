<?php

include("conexion.php");
$con=conectar();

$id_venta=$_GET['id_venta'];

$sql="DELETE FROM ventas  WHERE id_venta='$id_venta'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>
