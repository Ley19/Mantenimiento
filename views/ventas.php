<?php 
    include("conexion.php");
    $con=conectar();

    $sql = "SELECT *  FROM ventas";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);

    $fcha = date("Y-m-d");
    ini_set('date.timezone','America/Mexico_City');
    $hora=date("H:i:s");
?>

<?php include("./layout/layout.php"); ?>

<head><title>Ventas</title></head>

<body>

    <!--JavaScript-->
    <script>
        
    </script>

    <header class="masthead" >
            <div class="row"> 
                    
                <div class="container px-4 px-lg-5">
                    <h3>Ingrese datos</h3>
                        <form action="insertar.php" method="POST">

                            <input type="hidden" class="form-control mb-3" name="id" placeholder="id" >
                            <input type="date" class="form-control mb-3" name="fecha" value="<?php echo $fcha;?>" readonly style="width:140px; text-align:right">
                            <input type="time" class="form-control mb-3" name="hora" placeholder="Hora" value="<?php echo $hora;?>" readonly  style="width:170px"; text-align:right>

                            <form action="" method="post">
                                <label for="campo">Buscar: </label>
                                <input type="text" name="campo" id="campo">
                            </form>
                                
                            <table class="table table-bordered">
                                <thead>
                                    <th>Codigo </th>
                                    <th>Concepto</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    </thead>
                            
                                 <tbody id="content">

                                </tbody>
                            </table>

                            <br><br>
                            <input value=Guardar type="submit" class="btn btn-primary" style="background-color: #00008B;">
                        </form>
                    </div>
                </div>  
        </header>
</body>
        
