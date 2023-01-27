<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

    
    $fcha = date("Y-m-d");
    ini_set('date.timezone','America/Bogota');
    $hora=date("H:i:s");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Pagina principal</title>
    </head>
    <body>

    <h1>Bienvenido a Materiales Santillan</h1>
        <a href="./ventas.php">Ventas</a>
        <a href="./personal.php">Personal</a>
    </body>
</html>