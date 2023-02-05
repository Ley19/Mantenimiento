<?php
include("conexion.php");
$con=conectar();

$id_cliente=$_POST['id_cliente'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO clientes VALUES('$id_cliente','$nombre','$apellidos','$direccion','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: clientes.php");
    
}else {
}
?>