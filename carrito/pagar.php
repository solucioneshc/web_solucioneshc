<?php
include '../conexion/config.php';
include '../conexion/conexion.php';
include '../carrito/carrito.php';
include '../plantilla/cabecera_car.php';

?>



<?php 

if($_POST){
    $total=0;
    $SID=session_id();
    $correo=$_POST['email'];
    
    foreach($_SESSION['CARRITO'] as $indice=>$producto){

        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);


    }

    $sentencia=$pdo->prepare(" INSERT INTO `tblventas` 
                            (`ID`, `Clavetransacion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `Status`) 
                                            VALUES (NULL,:Clavetransacion,'', NOW(),:Correo, :Total, 'pendiente');");

                        $sentencia ->bindParam(":Clavetransacion",$SID);
                        $sentencia ->bindParam(":Correo",$correo);
                        $sentencia ->bindParam(":Total",$total);
                        $sentencia->execute();

                        $idVenta=$pdo->lastInsertId();

                        foreach($_SESSION['CARRITO'] as $indice=>$producto){

                            $sentencia=$pdo->prepare ("INSERT INTO 
                                                    `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) 
                                                    VALUES (NULL,:IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0');");

                        $sentencia ->bindParam(":IDVENTA",$idVenta);
                        $sentencia ->bindParam(":IDPRODUCTO",$producto['ID']);
                        $sentencia ->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
                        $sentencia ->bindParam(":CANTIDAD",$producto['CANTIDAD']);
                        $sentencia->execute();
                        


                        }

                        
    // echo "<H3>".$total."</h3>";

}




?>

<div class="jumbotron text-center">
    <h1 class="display-4">Paso final</h1>
    <hr class="my-4">
    <p class="lead">estas a punto de pagar con paypal la cantidad de :
        <h4>$<?php echo number_format($total,2);?></h4>

    </p>
    
    <p>Los productos prodran ser descargados una vez que se procese el pago <br>
        <strong>(para aclarar:hgmail.com)</strong>
    </p>
</div>

<?php include '../plantilla/pie.php'?>