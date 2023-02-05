<?php 
    include("conexion.php");
    $con=conectar();

    $sql = "SELECT *  FROM ventas";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);

?>

<?php include("./LAYOUT/layout.php"); ?>

<head><title>Historial</title></head>
<body>

    <header class="masthead" style="box-sizing: border-box;" >

        <div class="container px-4 px-lg-5">
            <table class="table table-striped">
                <thead style="background-color:#ADD8E6;" >
                    <tr>
                        <th>N° Venta</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Concepto</th>
                        <th>Total</th>
                        <th>Detalles</th>
                        <th>Factura</th>
                    </tr>
                </thead>

                <tbody style="background-color:#F0FFFF;">
                    <?php
                        while($row=mysqli_fetch_array($query)){
                    ?>

                    <tr>
                        <th><?php  echo $row['id_venta']?></th>
                        <th><?php  echo $row['idCliente']?></th>
                        <th><?php  echo $row['fecha']?></th>
                        <th><?php  echo $row['hora']?></th>
                        <th><?php  echo $row['idProducto']?></th>
                        <th><?php  echo $row['total']?></th>
                        <th><a href="detallesVentas.php?id_venta=<?php echo $row['id_venta'] ?>"><i class="bi bi-file-text" style="color: #00008B;"></i></a></th>   
                        <th><a href="FPDF/factura.php?id_venta=<?php echo $row['id_venta']; ?>"><i class='bx bx-printer' style="color: #00008B;"></i></a></th>                                    
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </header>
</body>