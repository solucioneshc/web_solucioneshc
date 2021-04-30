<?php

 	
	$nombre= $_POST['nombre1'];
	$apellido= $_POST['apellido1'];
	$telefono= $_POST['telefono1'];
	$correo= $_POST['correo1'];
	$direccion= $_POST['direccion1'];

	
	require('conexion/conexion1.php');

		$insertar = "INSERT INTO prueba_conect(nombre, apellido, telefono, correo,direccion) VALUES 
		('$nombre','$apellido','$telefono','$correo','$direccion')";
		
		$resultado = mysqli_query($mysqli, $insertar);
		if($resultado) {
			echo "<script>alert('registrado');
			windows.location.assign='for_serviciot.php'</script>";
			
		}else{
			echo "<script>alert('no se registro');window.history.go(-1);</script>";
		}
		

	
?>