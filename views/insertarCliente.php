<?php
    include("conexion.php");
    $con=conectar();

    $id_cliente=$_POST['id_cliente'];
    $Nombre=$_POST['Nombre'];
    $Apellidos=$_POST['Apellidos'];
    $Direccion=$_POST['Direccion'];
    $Correo=$_POST['Correo'];
    $Telefono=$_POST['Telefono'];

    $sql="INSERT INTO clientes VALUES('$id_cliente', $Nombre','$Apellidos','$Direccion','$Correo','$Telefono')";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
        
    }else {
        echo "Error al insertar los datos: " . mysqli_error($con);
    }
?>