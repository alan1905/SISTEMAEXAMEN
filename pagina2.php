<?php
//codigo para generar el correo y enviarlo al correo que se ingrese en el formulario
$correo = $_POST['correo'];
$nombres = $_POST['nombre']; // jala los datos que se hayan introducido en el formulario
$mensaje = $_POST['mensaje'];

		$nombre="";

		$desde="Mensaje desde Página web"; //quien lo esta mandando

		$correo= $_POST['correo']; //destino aquien va dirigido

		$message = "<h2>Nombre: </h2>".$nombres.
		" <br><h2> mensaje: </h2>".$mensaje;

		$headers = 'From: '.$correo."\r\n".

        'Reply-To:'.$desde."\r\n".

        'X-Mailer: PHP/'.phpversion();

        $headers .= "MIME-Version: 1.0" . "\r\n";

        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		mail($correo,$message,$headers);

		header("Location: index.html"); // pagina del formulario

?>