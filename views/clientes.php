<?php 
    include("conexion.php");
    $con=conectar();

    $sql = "SELECT *  FROM clientes";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);

?>


<?php include("./LAYOUT/layout.php"); ?>

<head><title>Clientes</title></head>

<body>

    <!--JavaScript-->
    <script>
        
    </script>

    <header class="masthead" >
    <div class="container mt-5">
        <div class="row"> 
            <div class="col-md-3">
                <h3>Nuevo cliente</h3>
                    <form action="insertarClientes.php" method="POST">

                        <input type="hidden" class="form-control mb-3" name="id_cliente" placeholder="cod estudiante">
                        <label for="nombre">Nombre Completo: </label>
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                        <label for="apellidos">Apellidos: </label>
                        <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos">
                        <label for="direccion">Dirreccion: </label>
                        <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion">
                        <label for="telefono">Telefono: </label>
                        <input type="number" class="form-control mb-3" name="telefono" placeholder="telefono">
                                    
                        <input type="submit" class="btn btn-primary">
                    </form>
            </div>

            <div class="col-md-8">
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>NCliente</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Dirección</th>
                            <th>Telefono</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody style="background-color:#F0FFFF;">
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php  echo $row['id_cliente']?></th>
                                <th><?php  echo $row['nombre']?></th>
                                <th><?php  echo $row['apellidos']?></th>
                                <th><?php  echo $row['direccion']?></th>    
                                <th><?php  echo $row['telefono']?></th>
                                <th><a href="deleteCliente.php?id_cliente=<?php echo $row['id_cliente'] ?>" ><i class='bx bx-message-square-x bx-sm' style="color: #00008B;"></i></a></th>                                        
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
