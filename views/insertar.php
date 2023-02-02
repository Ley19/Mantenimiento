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

$sql="INSERT INTO ventas VALUES('$id_venta','$fecha','$hora','$nombre','$precio','$responsable','$ncliente ')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ventas.php");
    
}else {
}
?>