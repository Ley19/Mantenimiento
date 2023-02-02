<?php 
    include("conexion.php");
    $con=conectar();

$id_venta=$_GET['id_venta'];

$sql="SELECT * FROM ventas  WHERE id_venta='$id_venta'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<?php include("./layout/layout.php"); ?>

<head><title>Personal</title></head>

<body>
    <!--Estilos-->
    <style>
        body{
	        background-image:url(../IMG/fondo2.jpeg);
        }
        .label-style {
            font-weight: bold;
            color: #F0FFFF;
            background-color: #808080;
            width: 100px;
        }
    </style>


    <div class="container mt-5" style="height: 10px; width: 300px;">
        <form action="update.php" method="POST">
                    
                    <input type="hidden" name="id_venta" value="<?php echo $row['id_venta']  ?>">

                    <label>Fecha:</label>
                    <input type="text" readonly class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']  ?>">
                                
                    <label>Hora:</label>
                    <input type="text" readonly class="form-control mb-3" name="hora" placeholder="hora" value="<?php echo $row['hora']  ?>">
                                
                    <label>Nombre:</label>
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                
                    <label>Fecha:</label>
                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
                                
                    <label>Responsable:</label>
                    <input type="text" class="form-control mb-3" name="responsable" placeholder="responsable" value="<?php echo $row['responsable']  ?>">
                                
                    <label>Nombre Cliente:</label>
                    <input type="text" class="form-control mb-3" name="ncliente" placeholder="ncliente" value="<?php echo $row['ncliente']  ?>">
                              
                    <div class="form-group" style="text-align: right">
                        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </div>
        </form>        
    </div>
</body>