<?php
include 'plantilla/cabecera.php'
?>

<!------------------------------------------------------ CABECERA------------------------------------------- -->

<div id="carouselst" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselst" data-slide-to="0" class="active"></li>
        <li data-target="#carouselst" data-slide-to="1"></li>
        <li data-target="#carouselst" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imagenes/servicio/st2.jpg" class="d-block w-100 banner_servicio" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagenes/servicio/st3.jpg" class="d-block w-100 banner_servicio" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagenes/servicio/st4.jpg" class="d-block w-100 banner_servicio" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselst" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselst" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!------------------------------------------------------ FIN CABECERA------------------------------------------- -->

<!--------------------------------------------------------- ESTRUCTURA SERVICIO ------------------------------->
<div class="row mt-3  ">
    <div class="col-8 stecnico d-none d-sm-block d-sm-none  ">
        <div class="card d-inline-block " style="width: 17rem;">

            <img src="imagenes/iconos/tecnologia.svg" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-text">Outsorsing</p>
            </div>
        </div>
        <div class="card d-inline-block" style="width: 17rem;">
            <img src="imagenes/iconos/mesa.svg" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-text">Mesa de ayuda</p>
            </div>
        </div>
        <div class="card d-inline-block" style="width: 17rem;">
            <img src="imagenes/iconos/proyectos.svg" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-text">Proyecto TI</p>
            </div>
        </div>
        <div class="card d-inline-block mt-3" style="width: 17rem;">
            <img src="imagenes/iconos/suministros.svg" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-text">Suministros.</p>
            </div>
        </div>
        <div class="card d-inline-block" style="width: 17rem;">
            <img src="imagenes/iconos/mantenimiento.svg" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-text">Mantenimiento</p>
            </div>
        </div>
        <div class="card d-inline-block" style="width: 17rem;">
            <img src="imagenes/iconos/documentacion.svg" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-text">Normalización ISO</p>
            </div>

        </div>
    </div>

    <!------------------------------------------ video------------------------------------ -->
    <div class="col-4 mt-3 stecnico d-none d-sm-block d-sm-none  video">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item  " src="https://www.youtube.com/embed/buHW8o-9FGs" width="1000"
                height="1000" frameborder="0" allowfullscreen></iframe>
        </div>

    </div>
    <!---------------------------------------- FIN VIDEO---------------------------------- -->
</div>

<div class="row mt-3" id="stdescrip">
    <div class="col-md-4 col-sd-3" id="stdescriptodo">

        <img src="imagenes/iconos/soporte-tecnico.svg" class="card-img mt-2" alt="...">
        <h3 class="d-inline-block">SOPORTE TÉCNICO</h3>

        <P>reparación de inconveniente con su equipos informaticos, mantenimiento, revisión
        </P>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/redes.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">REDES Y WIFI</h3>
        <p>instalación, configuración, mantenimiento de redes alambricas e inalambricas </p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/servidor.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">INFRAESTRUCTURA TI</h3>
        <p>chequeo de los componentes fisicos del servicio TI. todo los componentes tecnologicos involucrados en su
            organizacion </p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/informacion.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">RECUPERACIÓN</h3>
        <p>le ayudamos a recuperar la data eliminada de sus discos de almacenamientos </p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/instalacion.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">INSTALACION DE SOFTWARE</h3>
        <p>instalacion de programas, antivirus necesarios para que su pc pueda funcionar correctamente </p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/dto.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">ELIMINACIÓN DE VIRUS</h3>
        <p>cheqamos su equipos contravirus, malware que esten afectando con el funcionamiento de su pc </p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/mto.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">MANTENIMIENTO </h3>
        <p>Mantenimiento fisico a las computadoras, impresoras, scaner, mantenemos sus equipos para darle una duracion
            mas larga </p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/laptop.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">RECUPERACION DE LAPTOP</h3>
        <p>chequeo de laptops, pantallas, se verifican los componentes electronicos</p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/impresora.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">IMPRESORA </h3>
        <p>revision, chequeo y mantenimiento </p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="..." class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">servidores </h3>
        <p>instalacion, configuracion de servidores. instalacion de servidores de correos, active directory. </p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/web.svg" class="card-img-top mt-2 " alt="...">
        <h3 class="d-inline-block">paginas web y correos</h3>
        <p>configuracion de hosting, dominios, correos coorporativos, diseñso y desarrollos web </p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/alquilar.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">ALQUILERES DE EQUIPOS</h3>
        <p>neecsita equipos informaticos por un tiempo, le prestamos el servicio de alquileres de equipos </p>
    </div>
</div>

<!-- FIN ESTRUCTURA SERVICIO -->

<!------------------------------------------------- BOTONES ----------------------------------------->

<div class="row mt-3  col-sm-4 col-md-12 btn_form ">
    <div class=" ">
        <button class="btn btn-primary mr-2" id="buton1">Solicitar Servicio</button>
    </div>
    <div class="">
        <button class="btn btn-primary mr-2" id="buton2">Presupuesto</button>
    </div>
    <div class="">
        <button class="btn btn-primary mr-2" id="buton3">Por asignar</button>
    </div>

</div>

<!-- ------------------------------------------FUNCION CON JQUERY-------------------------------- -->

<script src="../js/codigo.js"></script>

<!---------------------------------------------- PIE DE PAGINA ----------------------------------- -->
<?php
include 'plantilla/pie.php'
?>