<?php

$dir_subida = 'uploads/';
$fichero_subido = $dir_subida . basename($_FILES['img']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['img']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo 'Más información de depuración:';
print_r($_FILES);

print "</pre>";



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