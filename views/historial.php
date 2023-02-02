<?php 
    include("conexion.php");
    $con=conectar();

    $sql = "SELECT *  FROM ventas";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);

?>

<?php include("./layout/layout.php"); ?>

<head><title>Historial</title></head>
<body>

    <header class="masthead" style="box-sizing: border-box;" >

        <div class="container px-4 px-lg-5">
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
                        <th><a href="delete.php?id_venta=<?php echo $row['id_venta'] ?>"><i class='bx bx-message-square-x bx-sm' style="color: #00008B;"></i></a></th>
                        <th><a href="factura.php"><i class='bx bx-printer' style="color: #00008B;"></i></a></th>                                        
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </header>
</body>