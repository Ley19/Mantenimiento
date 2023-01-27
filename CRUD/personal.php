<?php 
    include("conexion.php");
    $con=conectar();

    #$sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

    
    $fcha = date("Y-m-d");
    ini_set('date.timezone','America/Mexico_City');
    $hora=date("H:i:s");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <title> PAGINA PERSONAL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="../css/menu.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <div id="_menu">

        <ul class="nav">
            <li><a href="">Ventas</a></li>
            <li><a href="">Personal</a></li>
        </ul>

        </div>
        
        <style>
            body{
	            background-image:url(../IMG/fondo2.jpeg);
            }
        </style>
            <div class="container mt-5" >
                   
            </div>
    </body>
</html>