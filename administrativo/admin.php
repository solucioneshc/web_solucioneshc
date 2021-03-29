<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>

<?php
include '../plantilla/cabecera_admin.php'


	?>

<div class="row">
<!-- bloque admin -->
    <?php
include '../plantilla/bloque_admin.php'
    ?>

    
    <!-- fin bloque admin -->
    
    
    <div class="col-8">

        <form method="post" action="">
            <fieldset>
                <legend style="font-size: 18pt"><b>Registro</b></legend>
                <div class="form-group">
                    <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
                    <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
                </div>
                <div class="form-group">
                    <label style="font-size: 14pt; "><b>Ingresa tu email</b></label>
                    <input type="text" name="nick" class="form-control" required placeholder="Ingresa mail" />
                </div>
                <div class="form-group">
                    <label style="font-size: 14pt; "><b>Ingresa tu Password</b></label>
                    <input type="password" name="pass" class="form-control" required placeholder="Ingresa contraseña" />
                </div>
                <div class="form-group">
                    <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
                    <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
                </div>
                <input class="btn btn-danger" type="submit" name="submit" value="Registrarse" />
            </fieldset>
        </form>
    </div>
    <?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>


</div>





<?php
include '../plantilla/pie.php'
?>