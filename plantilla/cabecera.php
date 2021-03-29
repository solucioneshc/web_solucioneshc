<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="estylo/forma.css">
    <!-- icono de favicone en la pagina -->
    <link rel="shortcut icon" type="image/png" href="imagenes/logo1.png"/>
    

    <script src="../js/jquery-3.6.0.min.js"></script>
    <title>SOLUCIONES TECNOLÓGICAS</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img class="img-fluid" src="imagenes/logo1.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto ml-auto text-center ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicio.php">SERVICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">QUIENES_SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://solucioneshc.com/blog/">BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="descarga.php">DESCARGA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pag_mantenimiento.php">PORTAFOLIO DE INVERSION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">CARRITO COMPRA</a>
                </li>
               
               <!-- validacion para que se muestre en el menu cuantos se seleccionaron   -->
               <li class="nav-item">

                

                    <a class="nav-link" href="carrito/mostrarcarrito_2.php">(<?php 
                    echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    
                    
                    ?>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">CONTACTOS</a>
                </li>
                
            </ul>
        </div>
        <form class="form-inline" action="validar.php" method="POST">
            <label class="sr-only" for="inlineFormInputName2" >correo</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="mail" placeholder="correo">

            <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
            <div class="input-group mb-2 mr-sm-2">
                
                <input  class="form-control" id="inlineFormInputGroupUsername2" placeholder="contraseña " type="password" name="pass" >
            </div>

            

            <button type="submit" class="btn btn-primary mb-2" value="Aceptar">ingresar</button>
        </form>
    </nav>
    <br>


    <!-- <div class="row d-flex justify-content-center ">
        <div class="col-md-3 ">
           
                <input class="form-control mr-sm-2 d-none d-md-block " type="search" placeholder="Buscar" aria-label="Search" id="formulario">
                
                <button class="btn btn-outline-success my-2 my-sm-0 d-none d-md-block" type="submit" id="boton">Search</button>
            
        </div>


    </div> -->


    <div class="container-fluid" >

  