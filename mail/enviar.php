<?php


require ("class.phpmailer.php");
require ("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["nombre"]) || !isset($_POST["email"]) || !isset($_POST["mensaje"]) ) {
    die ("Es necesario completar todos los datos del formulario");
}


$nombre = $_POST["nombre"];

$email = $_POST["email"];

$mensaje = $_POST["mensaje"];


$destinatario = "contactenos_web@solucioneshc.com";


// Datos de la cuenta de correo utilizada para enviar v�a SMTP
$smtpHost = "mail.solucioneshc.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "contactenos_web@solucioneshc.com";  // Mi cuenta de correo
$smtpClave = "solucioneshc2020";  // Mi contrase�a




$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $email; // Email desde donde env�o el correo.
$mail->FromName = $nombre;
$mail->AddAddress($destinatario); // Esta es la direcci�n a donde enviamos los datos del formulario

$mail->Subject = "Formulario desde el Sitio Web"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "
<html> 

<body> 

<h1>Recibiste un nuevo mensaje desde el formulario de contacto</h1>

<h2>Informacion enviada por el usuario de la web:</h2>

<p>nombre: {$nombre}</p>

<p>email: {$email}</p>



<p>mensaje: {$mensaje}</p>

</body> 

</html>

<br />"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    echo '<script type="text/javascript">
        alert("Sugerencia Guardada le contestaremos lo antes posible");
        window.location.href="../index.php";
        </script>';
     
    
      
} else {
    echo "Ocurri� un error inesperado.";
    

    
}

?>

