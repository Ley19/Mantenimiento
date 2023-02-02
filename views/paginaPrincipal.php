<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

    
    $fcha = date("Y-m-d");
    ini_set('date.timezone','America/Bogota');
    $hora=date("H:i:s");
?>

<?php include("./layout/layout.php"); ?>

<head><title>Pagina principal</title></head>

<body id="page-top">

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h1 class="text-center mt-0">Bienvenidos </h1>
                <h1 class="text-center mt-0">Materiales Santillan </h1>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-cart-fill fs-1 text-primary"></i></i></div>
                            <h3 class="h4 mb-2" ><a href="./ventas.php">Ventas</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-person-circle fs-1 text-primary"></i></i></div>
                            <h3 class="h4 mb-2" ><a href="./clientes.php">Clientes</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-box-seam fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2" ><a href="./productos.php">Productos</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-journal-bookmark-fill fs-1 text-primary"></i></i></div>
                            <h3 class="h4 mb-2" ><a href="./historial.php">Historial</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
  