<?php 
    include("conexion.php");
    $con=conectar();

    $sql = "SELECT *  FROM ventas";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);

    $sqlProductos = "SELECT *  FROM productos";
    $queryProductos = mysqli_query($con,$sqlProductos);
    $rowProductos = mysqli_fetch_array($queryProductos);

    $fcha = date("Y-m-d");
    ini_set('date.timezone','America/Mexico_City');
    $hora=date("H:i:s");
?>

<?php include("./layout/layout.php"); ?>

<head><title>Factura</title></head>
<body>
    <header class="masthead" style="box-sizing: border-box;" >

    <div>
        <h3>Selecciona cliente</h3>

        <input type="text">

        <button><a href="./clientes.php">Cliente nuevo</a></button>
        <button>Generar Factura</button>
    </div>

    </header>
</body>
