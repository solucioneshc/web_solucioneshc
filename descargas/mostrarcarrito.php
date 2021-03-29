

<?php 
include '../plantilla/cabecera.php';
include 'carrito.php';
include '../conexion/config.php';
include '../conexion/conexion.php';
include '../conexion/conexion1.php';

?>



<h3>LISTA DE CARRITO</h3>
<!-- validacion para ver si tiene algo el carrito de compra -->
<?php if(!empty($_SESSION['CARRITO'])){?>


<table class="table table-light table-bordered ">
    <tbody>
        <tr>
            <th width="20%">imagen</th>
            <th width="10%" class="text-center">nombre</th>
            <th width="20%" class="text-center">descripcion</th>
            <th width="20%" class="text-center">link</th>
            <th width="5%">--</th>
        </tr>

        <?php $total=0; ?>
        <?php foreach($_SESSION['CARRITO'] as $indice => $producto){ ?>
        <tr>
            <td width="40%"><?php echo $producto['imagen']?></td>
            <td width="15%" class="text-center"><?php echo $producto['nombre']?></td>
            <td width="20%" class="text-center"><?php echo $producto['descripcion']?></td>
            <td width="20%" class="text-center">
                <?php echo number_format($producto['PRECIO']* $producto['CANTIDAD'],2); ?></td>
            <td width="5%">

                <form action="" method="post">

                    <input type="hidden" name="id" id="id"
                        value="<?php echo openssl_encrypt($producto ['ID'],COD,KEY);?>">


                    <button class="btn btn-danger" type="submit" name="btnaction" value="Eliminar">Eliminar</button>
            </td>
            </form>


        </tr>
        <?php $total=$total+($producto['PRECIO']* $producto['CANTIDAD']);?>

        <?php } ?>

        <tr>
            <td colspan="3" align="right">
                <h3>Total</h3>
            </td>
            <td align="right">
                <h3>$<?php echo number_format($total,2);?></h3>
            </td>
            <td></td>
        </tr>

        <tr>
            <td colspan="5">

                <form action="pagar.php" method="post">

                    <div class="alert alert-success" role="alert">
                        Content


                        <div class="form-group">
                            <label for="my-input">correo de contacto</label>
                            <input id="email" name="email" class="form-control" type="email"
                                placeholder="por favor escribe tu correo">
                        </div>

                        <small id="emailHelp" class="form-tex text-muted">
                            Los productos se enviaran a este correo

                        </small>

                    </div>
                    <button class="btn btn-primary btn-lg btn-block" name="btnaction" type="submit"
                        value="proceder">proceder a pagar

                    </button>

                </form>


            </td>
        </tr>


    </tbody>
</table>

<?php }else{?>

<div class="alert alert-success" role="alert">
    no hay productos en el carrito
</div>

<?php } ?>

<?php include '../plantilla/pie.php'?>