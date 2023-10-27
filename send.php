


<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);

		$name1 = $_POST['name1'];
		$name2 = $_POST['name2'];
		$name3 = $_POST['name3'];
		$name4 = $_POST['name4'];
		$name5 = $_POST['name5'];
		$name6 = $_POST['name6'];


		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
		$password3 = $_POST['password3'];
		$password4 = $_POST['password4'];
		$password5 = $_POST['password5'];
		$password6 = $_POST['password6'];


		$destinatario = $_POST['email'];
		$titulo = "Tus contraseñas";
		$body = '
				<!DOCTYPE html5>
				<html>
				<head>
					<title></title>
				</head>
				<body>
						
					<p><b>'.$name1.'</b>'.$password1.'</p>

					<p><b>'.$name2.'</b>'.$password2.'</p>

					<p><b>'.$name3.'</b>'.$password3.'</p>
						
					<p><b>'.$name4.'</b>'.$password4.'</p>

					<p><b>'.$name5.'</b>'.$password5.'</p>

					<p><b>'.$name6.'</b>'.$password6.'</p>

				</body>
				</html>';

		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'From: @.com' . "\r\n";
		$headers .= "X-Mailer: PHP/".phpversion()."\r\n";

		$mail = mail($destinatario, $titulo, $body, $headers);

		if($mail) {

			echo '<script type="text/javascript">
			alert("Su mensaje ha sido enviado con éxito");
			window.location.href="password.html";</script>';

		} 

		else{

			echo '<script type="text/javascript">
			alert("Ha ocurrido un error al intentar enviar su petición. Por favor, compruebe su conexión");
			window.location.href="password.html";</script>';
		}


		$filename = "cuaderno";

		// include autoloader
		require_once 'assets/dompdf/autoload.inc.php';

		// reference the Dompdf namespace
		use Dompdf\Dompdf;

		// instantiate and use the dompdf class
		$dompdf = new Dompdf();

		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'portrait');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream($filename);

?>