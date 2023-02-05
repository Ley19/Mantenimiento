<?php
    include("conexion.php");
    $con=conectar();

    $id_venta=$_POST['id_venta'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $idProducto=$_POST['idProducto'];
    $cantidad=$_POST['cantidad'];
    $responsable=$_POST['responsable'];
    $total=$_POST['total'];
    $idCliente=$_POST['idCliente'];

    $sql="INSERT INTO ventas VALUES('$id_venta','$fecha','$hora','$idProducto', '$cantidad', '$responsable','$total', '$idCliente')";
    $query= mysqli_query($con,$sql);

    if($query){
        echo "<script>
        window.onload = function(){
            alert('Datos guardados correctamente.');
            window.location.href='ventas.php';
        }
        </script>";
    }else {
        echo "Error al guardar los datos.";
    }
?>