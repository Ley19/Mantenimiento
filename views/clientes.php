<?php 
    include("conexion.php");
    $con=conectar();

    $sql = "SELECT *  FROM clientes";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);

?>

<?php include("./layout/layout.php"); ?>

<head><title>Clientes</title></head>
<body>

    <header class="masthead" style="box-sizing: border-box;" >
        <div class="row"> 
            <div class="col-md-3">
                <h3>Cliente nuevo</h3>

                    <form action="insertarCliente.php" method="POST">
                        <input type="hidden" name="id_cliente" value="">
                        <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                        <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos">
                        <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion">
                        <input type="text" class="form-control mb-3" name="Correo" placeholder="Correo">
                        <input type="number" class="form-control mb-3" name="Telefono" placeholder="Telefono">

                    <input value=Guardar type="submit" class="btn btn-primary" style="background-color: #00008B;">
                    </form>
            </div>

            <div class="col-md-8">
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <td>Nombre</td>
                            <td>Apellidos</td>
                            <td>Dirección</td>
                            <td>Correo</td>
                            <td>Telefono</td>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <td><?php  echo $row['Nombre']?></td>
                                    <td><?php  echo $row['Apellidos']?></td>
                                    <td><?php  echo $row['Direccion']?></td>
                                    <td><?php  echo $row['Correo']?></td>    
                                    <td><?php  echo $row['Telefono']?></td>                                      
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
  