<?php 
    include("conexion.php");
    $con=conectar();

$id_venta=$_GET['id_venta'];

$sql="SELECT * FROM ventas  WHERE id_venta='$id_venta'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Editar Registro</title>
         <!-- Boxicons CSS -->
         <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <style>
            body{
	            background-image:url(../IMG/fondo2.jpeg);
            }
        </style>
                <div class="container mt-5" style="height: 10px; width: 300px;">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_venta" value="<?php echo $row['id_venta']  ?>">

                                <label style="font-weight: bold; color:#F0FFFF; background-color: #808080; width: 100px;" >Fecha:</label>
                                <input type="text" readonly class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']  ?>">
                                
                                <label style="font-weight: bold; color:#F0FFFF; background-color: #808080; width: 100px;" >Hora:</label>
                                <input type="text" readonly class="form-control mb-3" name="hora" placeholder="hora" value="<?php echo $row['hora']  ?>">
                                
                                <label style="font-weight: bold; color:#F0FFFF; background-color: #808080; width: 100px;" >Nombre:</label>
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                
                                <label style="font-weight: bold; color:#F0FFFF; background-color: #808080; width: 100px;" >Fecha:</label>
                                <input type="text" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
                                
                                <label style="font-weight: bold; color:#F0FFFF; background-color: #808080; width: 100px;" >Responsable:</label>
                                <input type="text" class="form-control mb-3" name="responsable" placeholder="responsable" value="<?php echo $row['responsable']  ?>">
                                
                                <label style="font-weight: bold; color:#F0FFFF; background-color: #808080; width: 200px;" >Nombre Cliente:</label>
                                <input type="text" class="form-control mb-3" name="ncliente" placeholder="ncliente" value="<?php echo $row['ncliente']  ?>">
                              
                                <div class="form-group" style="text-align: right">
                                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                                </div>
                    </form>
                    
                </div>
    </body>
</html>