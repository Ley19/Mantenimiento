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

<?php include("./LAYOUT/layout.php"); ?>

<head><title>Ventas</title></head>

<body>

    <!--JavaScript-->
    <script>

        function loadProductData(idProducto) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'get_product_data.php?id_producto=' + idProducto, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                var productData = JSON.parse(xhr.responseText);
                document.getElementById('concepto').value = productData.concepto;
                document.getElementById('descripcion').value = productData.descripcion;
                document.getElementById('precioVenta').value = productData.precioVenta;
                }
            };
            xhr.send();
        
        }

        function calcularTotal() {
            const cantidad = document.querySelector('input[name="cantidad"]').value;
            const precioVenta = document.querySelector('input[id="precioVenta"]').value;
            const total = cantidad * precioVenta;
            document.querySelector('input[name="total"]').value = total;
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('input[name="cantidad"]').addEventListener('input', calcularTotal);
        });

        function validarForm(event) {
            var responsable = document.forms["form"]["responsable"].value;
            var cliente = document.forms["form"]["idCliente"].value;
            if (responsable === "" || cliente === "Sin Cliente") {
                
                window.onload = function(){
                    alert('Los campos Responsable y Cliente son obligatorios');
                    event.preventDefault();
                    return;
                }
                
            }
            return true;
        }

    </script>

    <header class="masthead" >
            <div class="row"> 
                    
                <div class="container px-4 px-lg-5">
                    <h3>Nuevo Venta</h3>
                        <form action="insertarVentas.php" method="POST" onsubmit="validarForm(event)">

                            <input type="hidden" class="form-control mb-3" name="id_venta" >
                            <input type="date" class="form-control mb-3" name="fecha" value="<?php echo $fcha;?>" readonly style="width:140px; text-align:right">
                            <input type="time" class="form-control mb-3" name="hora" placeholder="Hora" value="<?php echo $hora;?>" readonly  style="width:170px"; text-align:right>
                            <label for="responsable">Responsable:</label> <br>
                            <input type="text" class="form-control mb-3" id="responsable" name="responsable" style="width:300px;" placeholder="Quien entrega el pedido" style="width:140px;">
                            
                            <label for="idCliente">Cliente:</label> <br>
                            <select id="idCliente" name="idCliente" style="width:300px;">
                                        <option value="Sin Cliente">Seleccionar Cliente</option>
                                <?php
                                // Realiza la consulta a la tabla "clientes"
                                $queryC = "SELECT * FROM clientes";
                                $resultC = mysqli_query($con, $queryC);
                                // Recorre el resultado de la consulta y crea una opción por cada registro
                                while ($row = mysqli_fetch_assoc($resultC)) {
                                echo "<option value='" . $row['id_cliente'] . "'>" . $row['nombre'] . "</option>";
                               
                                }
                                ?>
                            </select>
                            <br><br>
                                
                            <table class="table table-bordered">
                                <thead style="background-color:#ADD8E6;">
                                    <td>Codigo </td>
                                    <td>Concepto</td>
                                    <td>Descripcion</td>
                                    <td>Cantidad</td>
                                    <td>Precio</td>
                                    <td>Total</td>
                                    </thead>
                            
                                 <tbody id="content" style="background-color:#F0FFFF;">
                                    <td>
                                    <select name="idProducto" style="width:150px" onchange="loadProductData(this.value)">
                                        <?php
                                        // Realiza la consulta a la tabla "productos"
                                        $query1 = "SELECT * FROM productos";
                                        $result1 = mysqli_query($con, $query1);

                                        // Recorre el resultado de la consulta y crea una opción por cada registro
                                        while ($row = mysqli_fetch_assoc($result1)) {
                                            echo "<option value='" . $row['id_producto'] . "'>" . $row['id_producto'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                    </td>

                                    <td><input type="text" id="concepto" name="concepto" value="" readonly></td>
                                    <td><input type="text" id="descripcion" name="descripcion" value="" readonly></td>
                                    <td><input type="number" name="cantidad" ></td>
                                    <td><input type="number" id="precioVenta" name="precioVenta" readonly value=""></td>
                                    <td><input type="number" name="total" readonly value=""></td>

                                </tbody>
                            </table>

                            <br><br>
                            <input type="submit" value="Guardar" class="btn btn-primary" style="background-color: #00008B;">
                            
                        </form>

                    </div>
                </div>  
        </header>
</body>