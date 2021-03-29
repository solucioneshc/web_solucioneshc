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
                    <label style="font-size: 14pt"><b>Nombre </b></label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre" />
                </div>
                <div class="form-group">
                    <label style="font-size: 14pt; "><b>descripcion</b></label>
                    <input type="text" name="descripcion" class="form-control" required placeholder="Ingresa mail" />
                </div>
                <div class="form-group">
                    <label style="font-size: 14pt; "><b>link</b></label>
                    <!-- <input type="textarea" name="desc" rows="10"
                        cols="70" class="form-control" required placeholder="informacion"  /> -->
                    <textarea name="link" id="" cols="70" rows="10" class="form-control"></textarea>
                </div>
                <form name="MiForm" id="MiForm" method="post" action="cargar.php" enctype="multipart/form-data">
                    <h4 class="text-center">Seleccione imagen a cargar</h4>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Archivos</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="image" name="img" multiple>
                        </div>
                        <br>
                        <button name="submit" class="btn btn-primary">Cargar Imagen</button>
                    </div>
                </form>
               
            </fieldset>
        </form>


    </div>
    <?php
		if(isset($_POST['submit'])){
			require("descargas.php");
		}
	?>


</div>





<?php
include '../plantilla/pie.php'
?>