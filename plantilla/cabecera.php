<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="estylo/forma.css">
    <!-- icono de favicone en la pagina -->
    <link rel="shortcut icon" type="image/png" href="imagenes/logo1.png" />


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
    <!-- google adsense -->

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1157893841653820"
        crossorigin="anonymous"></script>

    <script data-ad-client="ca-pub-1157893841653820" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>



    <!-- fin google adsense -->

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


    <script src="js/jquery-3.6.0.min.js"></script>
    <title>SOLUCIONES TECNOLÓGICAS</title>
</head>

<body>
    <!-- anuncios AMP -->
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>
    <!-- fin anuncios AMP -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img class="img-fluid logo_principal" src="imagenes/iconos/logo.png"
                alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto ml-auto text-center ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicio.php">Servicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://solucioneshc.com/blog/">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="descarga.php">Descarga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pag_mantenimiento.php">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">Carrito</a>
                </li>

                <!-- validacion para que se muestre en el menu cuantos se seleccionaron   -->
                <li class="nav-item">



                    <a class="nav-link" href="carrito/mostrarcarrito_2.php">(<?php 
                    echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    
                    
                    ?>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contactos</a>
                </li>

            </ul>
        </div>
        <form class="form-inline" action="validar.php" method="POST">
            <label class="sr-only" for="inlineFormInputName2">correo</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="mail"
                placeholder="correo" autocomplete="off">

            <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
            <div class="input-group mb-2 mr-sm-2">

                <input class="form-control" id="inlineFormInputGroupUsername2" placeholder="contraseña " type="password"
                    name="pass">
            </div>



            <button type="submit" class="btn btn-primary mb-2 boton_barra" value="Aceptar">ingresar</button>
        </form>
    </nav>
    <br>


    <!-- <div class="row d-flex justify-content-center ">
        <div class="col-md-3 ">
           
                <input class="form-control mr-sm-2 d-none d-md-block " type="search" placeholder="Buscar" aria-label="Search" id="formulario">
                
                <button class="btn btn-outline-success my-2 my-sm-0 d-none d-md-block" type="submit" id="boton">Search</button>
            
        </div>


    </div> -->


    <div class="container-fluid">