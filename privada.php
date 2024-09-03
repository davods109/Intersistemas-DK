<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Intersistemas DK - Corresponsal - Sistemas - Papeleria</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
</head>

<body>
    <!-- Inicio de la barra superior -->
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la barra superior -->


    <!-- Inicio de la barra de navegación -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-secondary"><span class="text-primary">INTERSISTEMAS</span> DK</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                                                 
                        </div>
                        <a href="index.html" class="nav-item nav-link">Salir</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Fin de la barra de navegación -->


    <!-- Inicio del formulario
 -->

<!-- Division izquierda muestra de registros -->

</style>
</head>
<body>
<div class="container">
  <div class="izquierdiv">
    <h2>Ultimos Registros </h2>
    <p>
        
    <?php  
       
          
    include("consulta_registros.php");

    ?>


    </p>

    <div>

    <?php  

    include("borrar_registros.php");

    ?>     
    </p>
    </div>

  </div>

  <!-- Division derecha guardar registros -->

  <div class="derechadiv">
    <h2> Verificar Cuentas</h2>
    <div class="p-3" style="max-width: 900px;">

    <?php           
        include("guardar_numero.php");
             
    ?>
                         
    </div>

    <div class="p-3" style="max-width: 900px;">

   
<!-- Division derecha debajo de boton enviar -->

    </div>

</div>

  
    <!-- Fin del formulario -->

    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

