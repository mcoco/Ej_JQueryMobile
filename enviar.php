<?php

//Recogida de variables
$varNombre = $HTTP_POST["nombre"];
$varCorreo = $HTTP_POST["correo"];
$varComentario = $HTTP_POST["comentario"];

//creación del mensaje
	//a qué email vamos a enviar la información, el usuario no tiene por qué conocer ese email

$para = 'cocoperezmila@gmail.com';
//asunto con el que nos llega el correo
$asunto ='Comentario desde la página web móvil';
//variable para el mensaje en sí en código html
$mensaje = '
<html>
	<head>
		<title>Comentario desde la página we móvil</title>
	</head>
	<body>
		<p>
		El usuario '.$varNombre . 'comenta que: ' .$varComentario . 'Responderle a la siguiente dirección: ' .$varCorreo . '
		</p>
	</body>
	</html>
';

//Fijar el formato del correo en la cabecera
$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//cabeceras adicionales
$cabeceras .= 'To:cocoperezmila <cocoperezmila@gmail.com>' . "\r\n";
$cabeceras .= 'From: Web móvil <cocoperezmila@gmail.com>' . "\r\n";
//enviar el email
mail($para, $asunto, $mensaje);
?>