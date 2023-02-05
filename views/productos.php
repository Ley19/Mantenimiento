<?php 
    include("conexion.php");
    $con=conectar();

    $sql = "SELECT *  FROM productos";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);

?>


<?php include("./LAYOUT/layout.php"); ?>

<head><title>Productos</title></head>

<body>

    <!--JavaScript-->
    <script>
        
    </script>

    <header class="masthead" >
    <div class="container mt-5">
        <div class="row"> 
            <div class="col-md-3">
                <h3>Nuevo producto</h3>
                    <form action="insertarProductos.php" method="POST">

                        <input type="hidden" class="form-control mb-3" name="id_producto" placeholder="cod estudiante">
                        <label for="apellidos">Concepto: </label>
                        <input type="text" class="form-control mb-3" name="concepto" placeholder="concepto">
                        <label for="direccion">Descripcion: </label>
                        <input type="text" class="form-control mb-3" name="descripcion" placeholder="descripcion">
                        <label for="direccion">Cantidad: </label>
                        <input type="text" class="form-control mb-3" name="cantidad" placeholder="cantidad">
                        <label for="telefono">Precio Compra: </label>
                        <input type="number" class="form-control mb-3" name="precioCompra" placeholder="precioCompra">
                        <label for="telefono">Precio Venta: </label>
                        <input type="number" class="form-control mb-3" name="precioVenta" placeholder="precioVenta">
                                    
                        <input type="submit" class="btn btn-primary">
                    </form>
            </div>

            <div class="col-md-8">
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>Codigo</th>
                            <th>Concepto</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Precio Compra</th>
                            <th>Precio Venta</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody style="background-color:#F0FFFF;">
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php  echo $row['id_producto']?></th>
                                <th><?php  echo $row['concepto']?></th>
                                <th><?php  echo $row['descripcion']?></th>
                                <th><?php  echo $row['cantidad']?></th>   
                                <th><?php  echo $row['precioCompra']?></th>
                                <th><?php  echo $row['precioVenta']?></th>
                                <th><a href="updateProductos.php?id=<?php echo $row['id_producto'] ?>" ><i class='bx bx-message-square-edit bx-sm' style="color: #00008B;"></i></a></th>   
                                <th><a href="deleteProductos.php?id=<?php echo $row['id_producto'] ?>" ><i class='bx bx-message-square-x bx-sm' style="color: #00008B;"></i></a></th>                                     
                            </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </header>
</body>
