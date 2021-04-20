<?php
include 'plantilla/cabecera.php'
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>



<!-------------------------------------------------- SECCION DE BANNER ------------------------------------------>

<div class="row mt-3  ">
    <div class="col ">
        <div id="banner_cabe" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#banner_cabe" data-slide-to="0" class="active"></li>
                <li data-target="#banner_cabe" data-slide-to="1"></li>
                <li data-target="#banner_cabe" data-slide-to="2"></li>
                <li data-target="#banner_cabe" data-slide-to="3"></li>
                <li data-target="#banner_cabe" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/banner/ingnovacion.jpeg" class="d-block w-100 " alt="..." id="seccion_banner">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="jumbotron" id="banner_info">
                            <h1 class="display-4">Innovación</h1>
                            <p class="lead"></p>
                            <hr class="my-4">
                            <p>El camino a la tecnología </p>
                            <p class="lead">
                                <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
                            </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="imagenes/banner/2.1.jpg" class="d-block w-100" alt="..." id="seccion_banner">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/banner/3.1.jpg" class="d-block w-100" alt="..." id="seccion_banner">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/banner/4.jpg" class="d-block w-100" alt="..." id="seccion_banner">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/banner/5.jpg" class="d-block w-100" alt="..." id="seccion_banner">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="jumbotron" id="banner_info">
                            <h1 class="display-4">Nuevas Inversiones</h1>
                            <p class="lead"></p>
                            <hr class="my-4">
                            <p>El Mundo ha Cambiado </p>
                            <!-- <p class="lead">
                                <a class="btn btn-primary btn-lg" href="#" role="button"></a>
                            </p> -->
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#banner_cabe" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#banner_cabe" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>



</div>

<!------------------------------------------------ FIN SECCIÓN DE BANNER --------------------------------->


<!--------------------------------------------- SECCIÓN DE BIENVENIDOS -------------------------------->

<div class="row mt-5" id="fondo1">
    <div class="col-md-6 col-sm-12 col-xs-12">

        <div class="jumbotron mt-3 " id="jum-1">
            <h1 class="display-4">Bienvenidos</h1>
            <p class="lead">Asesorías, consultorías & Auditorias</p>
            <hr class="my-4 linea">
            <p>Compromiso y Calidad</p>
            <!-- <a class="btn btn-primary btn-lg" href="#" role="button">prueb</a> -->
        </div>


    </div>
    <div class="col-md-6 col-sm-12 col-xs-12 mt-3 mb-3 banner1 d-none d-sm-block">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/SoporteTecnico.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>soporte técnico</h5>
                        <p>Servicio asistencia a domicilio y Remoto </p>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="imagenes/desarrolloweb.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>desarrollo web</h5>
                        <p>Páginas web</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagenes/consultor1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>consultoría informática</h5>
                        <p>Consultoría, Asesorías & Auditorias</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</div>

<!-------------------------------------------- FIN DE SECCION BIENVENIDOS ----------------------------->



<!-------------------------------------------- INICIO DESCRIPCION DE SERVICIO ------------------------->
<div class="row mt-5">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="card-group contenidocard">
            <div class="card mr-2">
                <img src="imagenes/inicio/servicio_tecnico1.jpg" class="card-img-top d-none d-sm-block " alt="...">
                <div class="card-body">
                    <h5 class="card-title">servicios</h5>
                    <p class="card-text">Le brindamos los siguientes servicios informáticos
                    </p>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Asesorías, consultorías & auditorias</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Virtualization </li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Análisis de procesos </li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Análisis de continuidad de negocio</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Soluciones web</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Almacenamientos en la nube</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Peritaje informático</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Soporte técnico</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Servidores y redes</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Seguridad informática</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Seguridad </li>
                </div>
                <div class="card-footer pie">
                    <small class="text-muted">Asistencia Física y Remota</small>
                </div>
            </div>
            <div class="card mr-2">
                <img src="imagenes/organizacion1.jpg" class="card-img-top d-none d-sm-block" alt="...">
                <div class="card-body">
                    <h5 class="card-title">la empresa</h5>
                    <p class="card-text">Personal que cuenta con la experiencia en el área por mas de 18 años en el
                        rubro de la informática, ofreciendo soluciones a múltiples empresas, la atención, calidad de
                        servicio y pasión por nuestro trabajo es lo que nos hace continuar cada día, ofreciendo mejores
                        soluciones para el crecimiento de la organización
                    </p>
                </div>
                <div class="card-footer pie">
                    <small class="text-muted">Atención Personalizada</small>
                </div>
            </div>
            <div class="card mr-2">
                <img src="imagenes/carrito1.jpg" class="card-img-top d-none d-sm-block" alt="...">
                <div class="card-body">
                    <h5 class="card-title">productos en venta</h5>
                    <p class="card-text">Colocamos a su disposición una tienda donde encontrara diferentes productos
                        informáticos,
                        puede consultarnos por disponibilidad y le hacemos entrega de su compra, ofreceremos
                        asesorías para que pueda realizar una compra segura </p>
                </div>
                <div class="card-footer pie">
                    <small class="text-muted">Carrito de Compra</small>
                </div>
            </div>
            <div class="card mr-2">
                <img src="imagenes/clientes1.jpg" class="card-img-top d-none d-sm-block" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CLIENTES</h5>
                    <p class="card-text">Algunos de los clientes satisfechos por el servicio realizado </p>
                    <li><img src="imagenes/iconos/chek.svg" alt=""> Commandair</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Corporación Todo Actitud</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Plastinieves</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Laboratorios Gainza</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Multi-respuestos Ideal</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Moneleca</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Energi Solar</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Corporacion Tortoleros </li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Repolca</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Caicedo</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Chupi Plas</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Fagonza</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Tortolero</li>
                    <li><img src="imagenes/iconos/chek.svg" alt="">Bensherman</li>

                </div>
                <div class="card-footer pie">
                    <small class="text-muted">Asistencias</small>
                </div>
            </div>
        </div>


    </div>
</div>
<!----------------------------------------------------------------- FIN DE SECCION SERVICIO ------------------>

<!-- INICIO MODAL INICIO -->
<div class="modal fade modalinicio" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content  ">
            <div class="modal-header " id="cajatex">
                <h5 class="modal-title" id="exampleModalLabel">SERVICIO A SU ALCANCE</h5>

            </div>
            <div class="modal-body  ">
                <div class="row ">
                    <div class="col-md-12  modal-inicio">
                        <button type="button" class="btn "><a
                                href="consultoria.php">CONSULTORÍA Y
                                ASESORÍAS</a></button>
                        <button type="button" class="btn    "><a href="st.php">SERVICIO
                                TÉCNICO</a></button>
                    </div>
                    <br>
                    <div class="container-fluid descripcion">
                        <br>
                        <h3>Nota:</h3>
                        <p>"Si desea información general dar clip fuera de este cuadro"</p>
                    </div>
                    <div class="col-12 publicidad">
                        <img src="imagenes/publicidad_inicio/serviciotecnico.jpeg" alt="">
                        <p></p>

                    </div>



                </div>

            </div>

        </div>

    </div>
</div>


<!------------------------------------------- FIN MODAL INICIO ------------------------------------>

<!--------------------------------------- SECCION DE SCRIP -------------------------------->
<script>
$(document).ready(function() {
    $('#exampleModal').modal('toggle')
});
</script>
<!------------------------------------ FIN SECCION DE SCRIP ------------------------------------>

<!-- -------------------------------------PIE DE PAGINA ----------------------------------------- -->
<?php
include 'plantilla/pie.php'
?>