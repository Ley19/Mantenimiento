<?php
include("conexion.php");
$con=conectar();

$id_producto=$_POST['id_producto'];
$concepto=$_POST['concepto'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];
$precioCompra=$_POST['precioCompra'];
$precioVenta=$_POST['precioVenta'];

$sql="INSERT INTO productos VALUES('$id_producto','$concepto','$descripcion','$cantidad','$precioCompra','$precioVenta')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: productos.php");
    
}else {
}
?>