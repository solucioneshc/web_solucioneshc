<?php

	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$desc= $_POST['desc'];
	$img=$_POST['img'];
	$id_tipo_producto=$_POST['id_tipo_producto'];


	require("../conexion/conexion1.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM tblproductos WHERE Nombre='$nombre'");
	$check_mail=mysqli_num_rows($checkemail);
		
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO tblproductos VALUES('','$nombre','$precio','$desc','$img','$id_tipo_producto')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		
		

	
?>