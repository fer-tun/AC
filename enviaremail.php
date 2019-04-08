<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="correo">
	<META HTTP-EQUIV=Refresh CONTENT="4; URL=index.html">
	<title>Enviar formulario</title>
</head>
<body>
<?php 
if(isset($_POST['email'])) 
{  // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias 
$email_to = "fernandatun14@gmail.com"; 
$email_subject = "Contacto desde el sitio web";  


// Aquí se deberían validar los datos ingresados por el usuario 

if(!isset($_POST['nombre']) || 
!isset($_POST['email']) || 
!isset($_POST['mensaje'])) {  

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />"; 
echo "Por favor, vuelva atrás y verifique la información ingresada<br />"; 
die(); }  

$email_message .= "Nombre: " . $_POST['nombre'] . "\n";  
$email_message .= "E-mail: " . $_POST['email'] . "\n"; 
$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";   // Ahora se envía el e-mail usando la función mail() de PHP 

$headers = 'From: '.$_POST['email']."\r\n". 
'Reply-To: '.$_POST['email']."\r\n" . 
'X-Mailer: PHP/' . phpversion(); 
@mail($email_to, $email_subject, $email_message, $headers);  
echo "El formulario se ha enviado con exito<br>";

//PARA REDIRECCIONAR AL FORMULARIO DE NUEVO PUEDES USAR ESTAS DOS FORMAS:

echo '<META HTTP-EQUIV=Refresh CONTENT="1"; URL="index.html">';
//echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=formulario.php'>";

 } ?>

</body>
</html>