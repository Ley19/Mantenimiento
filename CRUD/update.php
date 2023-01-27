<?php

include("conexion.php");
$con=conectar();

$id_venta=$_POST['id_venta'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$responsable=$_POST['responsable'];
$ncliente=$_POST['ncliente'];

$sql="UPDATE ventas SET  fecha='$fecha',hora='$hora',nombre='$nombre',precio='$precio',responsable='$responsable',ncliente='$ncliente' WHERE id_venta='$id_venta'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>