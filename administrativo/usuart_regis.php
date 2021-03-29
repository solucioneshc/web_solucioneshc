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

      <div class="from-1-2 mt-3">
          <label for="caja_busqueda">buscar:</label>
          <input type="text" name="caja_busqueda" id="caja_busqueda"></input>

      </div>

      <div id="datos"></div>


</div>

</div>





<?php
include '../plantilla/pie.php'
?>