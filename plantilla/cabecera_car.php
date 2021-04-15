<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../estylo/forma.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K3DQFVLLX9"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-K3DQFVLLX9');
    </script>




    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T434S62');
    </script>
    <!-- End Google Tag Manager -->

    <title>Document</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&family=Open+Sans:ital,wght@1,300&display=swap"
        rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img class="img-fluid logo_principal" src="imagenes/iconos/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto ml-auto text-center ">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../servicio.php">SERVICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../nosotros.php">QUIENES_SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contacto.php">CONTACTOS</a>
                </li>
                <li class="nav-item">

                    <!-- validacion para que se muestre en el menu cuantos se seleccionaron  -->

                    <a class="nav-link" href="mostrarcarrito_2.php">CARRITO(<?php 
                    echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    
                    
                    ?>)</a>
                </li>

                <li class="nav-item">
                    <a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a>
                    <br>
                    <a href="../conexion/desconectar.php"> Cerrar Cesión </a>

                </li>

            </ul>


        </div>

    </nav>


    <div class="row d-flex justify-content-center">
        <div class="col-md-3  ">
            <form class="form-inline my-2 my-lg-0 mr-auto ">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>


    </div>


    <div class="container-fluid">