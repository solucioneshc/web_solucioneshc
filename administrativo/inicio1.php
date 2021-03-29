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
<a href="../cv/consultor_organizacional.pdf">curriculum vitae personal</a>
    
    </div>
  


</div>





<?php
include '../plantilla/pie.php'
?>