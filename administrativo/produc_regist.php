<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>

<?php
include '../plantilla/cabecera_car.php'


	?>

<div class="row">
    <!-- bloque admin -->
    <?php
include '../plantilla/bloque_admin.php'
    ?>


    <!-- fin bloque admin -->


    <div class="col-6">

        <form method="post" action="">
            <fieldset>
                <legend style="font-size: 18pt"><b>Registro de productos en venta</b></legend>
                <div class="form-group">
                    <label style="font-size: 14pt"><b>Nombre del Producto</b></label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre" />
                </div>
                <div class="form-group">
                    <label style="font-size: 14pt; "><b>Precio</b></label>
                    <input type="text" name="precio" class="form-control" required placeholder="Ingresa mail" />
                </div>
                <div class="form-group">
                    <label style="font-size: 14pt; "><b>Descripcion</b></label>
                    <!-- <input type="textarea" name="desc" rows="10"
                        cols="70" class="form-control" required placeholder="informacion"  /> -->
                        <textarea name="desc" id="" cols="70" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label style="font-size: 14pt"><b>imagen</b></label>
                    <input type="text" name="img" class="form-control" required placeholder="repite contraseña" />
                </div>
                <input class="btn btn-danger" type="submit" name="submit" value="Registrarse" />
            </fieldset>
        </form>
    </div>
    <?php
		if(isset($_POST['submit'])){
			require("registro_produc.php");
		}
	?>


</div>





<?php
include '../plantilla/pie.php'
?>