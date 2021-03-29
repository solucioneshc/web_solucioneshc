<?php
include '../conexion/config.php';
include '../conexion/conexion.php';
include '../carrito/carrito_2.php';
include '../plantilla/cabecera_2.php';
?>

<div class="row mt-5">
    <div class="col-6">
        <form class="form" action="../validar.php" method="POST">
            <label style="font-size: 14pt"><b>Usuarios Registrados</b></label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="mail"
                placeholder="usuario - correo electronico">

            <div class="input-group mb-2 mr-sm-2">
                

                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Contraseña "
                    type="password" name="pass">
            </div>



            <button type="submit" class="btn btn-primary mb-2" value="Aceptar">Submit</button>
        </form>
    </div>
    <div class="col-6">
        <form method="post" action="">
            <fieldset>
                <legend style="font-size: 18pt"><b>Nuevos Registro</b></legend>
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
			require("../administrativo/registro.php");
		}
    ?>

</div>
</div>



<?php include '../plantilla/pie.php'?>