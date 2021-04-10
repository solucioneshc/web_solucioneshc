<?php

	$nombre=$_POST['nombre'];
	$desc=$_POST['descripcion'];
	$link= $_POST['link'];
	$img=$_POST['img'];
	$itd=$_POST['id_tipo_descargas'];

	require("../conexion/conexion1.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM descargas WHERE nombre='$nombre'");
	$check_mail=mysqli_num_rows($checkemail);
		
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO descargas VALUES('','$nombre','$desc','$link','$img','$itd')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		
		

	
?>