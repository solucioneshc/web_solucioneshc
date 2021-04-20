<?php
include 'conexion/config.php';
include 'conexion/conexion1.php';
include 'conexion/conexion.php';
include 'carrito/carrito.php';
include 'plantilla/cabecera.php';

?>




<div class="row mt-3">
    <div class="col-sm-12 col-md-4 col-xl-2 botones">
        <a href="productos.php" class="menu btn btn-primary" id="">todo</a>
        <a href="productos_1.php" class="menu btn btn-primary" id="">computadoras</a>
        <a href="productos_2.php" class="menu btn btn-primary" id="inicio"> licencias</a>
        <a href="productos_3.php" class="menu btn btn-primary" id="">software</a>
    </div>
    <div class="col-10">
        <?php if ($mensaje!=""){ ?>
        <div class="aler alert-sucess">
            <!-- pantalla de mensaje -->
            <?php echo $mensaje;?>

            <a href="carrito/mostrarcarrito_2.php" class="badge badge-sucess">ver carrito</a>

        </div>
        <!-- fin pantalla de mensaje -->
        <br>
        <?php }?>
        <div class="row">
            <!-- consultar los productos que estan en base datos -->
            <?php

                $sentencia=$pdo->prepare('SELECT * FROM tblproductos where id_tipo_productos = 2');
                $sentencia->execute();
                $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                // print_r($listaProductos);

            ?>

            <!-- fin de la consulta -->

            <!-- consulta producto base de datos -->

            <?php foreach($listaProductos as $producto){ ?>

            <div class="col-md-4 col-sm-6 col-xs-12 mt-3">
                <div class="card">
                    <img title=<?php echo $producto ['Nombre'];?> alt=<?php echo $producto ['Nombre'];?>
                        class="card-img-top" data-toggle="popover" data-trigger="hover"
                        data-content="<?php echo $producto ['Descripcion']?>" src="<?php echo $producto ['Imagen'];?>"
                        height="150px">

                    <div class="card-body">
                        <span><?php echo $producto ['Nombre'];?></span>
                        <h5 class="card-title">$<?php echo $producto ['Precio'];?></h5>
                        <p class="card-text"><?php echo $producto ['Descripcion'];?></p>

                        <!-- inicio del formulario encriptado -->

                        <form action="" method="POST">

                            <input type="hidden" name="id" id="id"
                                value="<?php echo openssl_encrypt($producto ['ID'],COD,KEY);?>">
                            <input type="hidden" name="nombre" id="nombre"
                                value="<?php echo openssl_encrypt($producto ['Nombre'],COD,KEY);?>">
                            <input type="hidden" name="precio" id="precio"
                                value="<?php echo openssl_encrypt($producto ['Precio'],COD,KEY);?>">
                            <input type="hidden" name="cantidad" id="cantidad"
                                value="<?php echo openssl_encrypt(1,COD,KEY);?>">

                            <!-- boton de agregar al carrito -->

                            <button class="btn btn-primary" name="btnaction" value="agregar" type="submit">
                                agregar al carrito

                            </button>

                            <!-- fin boton de agregar al carrito -->

                        </form>
                        <!-- fin  del formulario -->
                    </div>
                </div>

            </div>


            <?php }?>

            <!-- fin nueva consulta -->


        </div>

    </div>

</div>

<br>

<!-- <script>
//popod
$(function() {
    $('[data-toggle="popover"]').popover()
})
</script> -->

<script src="js/menu_descarga.js"></script>

<?php
include 'plantilla/pie_dos.php';
?>