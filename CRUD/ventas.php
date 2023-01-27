<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
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

        <title> PAGINA VENTAS</title>
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
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="hidden" class="form-control mb-3" name="id" placeholder="id" >
                                    <input type="date" class="form-control mb-3" name="fecha" value="<?php echo $fcha;?>" readonly>
                                    <input type="time" class="form-control mb-3" name="hora" placeholder="Hora" value="<?php echo $hora;?>" readonly >
                                    <select class="form-control mb-3" name="nombre">
                                        <option value="" disabled selected>Selecciona insumo</option>
                                        <option value="Arena">Arena</option>
                                        <option value="Graba">Graba</option>
                                        <option value="Tepetate">Tepetate</option>
                                        <option value="Tierra">Tierra</option>
                                        <option value="Piedra">Piedra</option>
                                    </select>
                                    <input type="number" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <select class="form-control mb-3" name="responsable">
                                        <option value="" disabled selected>Selecciona Responsable</option>
                                        <option value="Rene">Rene</option>
                                        <option value="Karen">Karen</option>
                                        <option value="Valentin">Valentin</option>
                                    </select>
                                    <input type="text" class="form-control mb-3" name="ncliente" placeholder="Nombre del Cliente">
                                    
                                    <input value=Guardar type="submit" class="btn btn-primary" style="background-color: #00008B;">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table table-striped">
                                <thead style="background-color:#ADD8E6;" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Responsable</th>
                                        <th>Nombre de Cliente</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody style="background-color:#F0FFFF;">
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_venta']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['hora']?></th>
                                                <th><?php  echo $row['nombre']?></th>  
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['responsable']?></th>
                                                <th><?php  echo $row['ncliente']?></th>
                                                <th><a href="actualizar.php?id_venta=<?php echo $row['id_venta'] ?>"><i class='bx bx-message-square-edit bx-sm' style="color: #00008B;"></i></a></th>
                                                <th><a href="delete.php?id_venta=<?php echo $row['id_venta'] ?>"><i class='bx bx-message-square-x bx-sm' style="color: #00008B;"></i></a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>