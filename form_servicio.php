
<?php
include 'conexion/conexion1.php';
	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];

	

		$insertar = "INSERT INTO s_tecnico(nombre, apellido, telefono, correo) VALUES 
		('','$nombre','$apellido','$telefono','$correo','','','','','')";
		
		$resultado = mysqli_query($mysqli, $insertar);
		if($resultado) {
			echo "<script>alert('registrado');
			windows.location='/index.php</script>";
			
		}else{
			echo "<script>alert('no se registro');</script>";
		}
		

	
?>