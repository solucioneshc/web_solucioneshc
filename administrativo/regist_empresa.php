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
                <legend style="font-size: 18pt"><b>REGISTRO DE EMPRESAS</b></legend>
                <div class="form-group">
                    <label style="font-size: 14pt"><b>Nombre </b></label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre" />
                </div>
                <div class="form-group">
                    <label style="font-size: 14pt; "><b>correo</b></label>
                    <input type="email" name="correo" class="form-control" required placeholder="Ingresa mail" />
                </div>
                <div class="form-group">
                    <label style="font-size: 14pt; "><b>telefono</b></label>
                    <!-- <input type="textarea" name="desc" rows="10"
                        cols="70" class="form-control" required placeholder="informacion"  /> -->
                    <input type="text" name="telefono" class="form-control" required placeholder="ingrese telefono" />
                </div>
                <!-- <form name="MiForm" id="MiForm" method="post" action="cargar.php" enctype="multipart/form-data">
                    <h4 class="text-center">Seleccione imagen a cargar</h4>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Archivos</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="image" name="img" multiple>
                        </div>
                    </div>
                        </form> -->
                <br>
                <button name="submit" class="btn btn-primary">REGISTRAR</button>



            </fieldset>
        </form>


    </div>
    <?php
		if(isset($_POST['submit'])){
			require("reg_empresas.php");
		}
	?>


</div>





<?php
include '../plantilla/pie.php'
?>