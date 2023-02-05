<?php 
    include("conexion.php");
    $con=conectar();

    $sql = "SELECT *  FROM ventas";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);

?>

<?php include("./LAYOUT/layout.php"); ?>

<head><title>Detalles</title></head>
<body>

    <header class="masthead" style="box-sizing: border-box;" >

    
    <a href="./historial.php" style="color: #00008B;">Salir <i class='bx bx-exit' style="color: #00008B;"></i></a>
    </header>
</body>