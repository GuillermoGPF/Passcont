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

					
						$to = 	$_POST['email']; 
						$from = "@.com"; 
						$subject =	"Vacío"; 
						$message = 	'
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


						require_once('assets/fpdf/fpdf.php');

						$pdf = new FPDF();
						$pdf -> AddPage();
						$pdf -> SetFont('Arial','',11);
						// $pdf ->Image('logo1.png',0,0,500);
						$pdf -> Cell(190,12,'Formulario generado en PDF',1,2,'C',0);
						$pdf -> Ln();
						$pdf -> Cell(50,9,$_POST['name1'],$_POST['password1'],0,2,'L');
						$pdf -> Ln();
						$pdf -> Cell(50,9,$_POST['name2'],$_POST['password2'],0,2,'L');
						$pdf -> Ln();
						$pdf -> Cell(50,9,$_POST['name3'],$_POST['password3'],0,2,'L');
						$pdf -> Ln();
						$pdf -> Cell(50,9,$_POST['name4'],$_POST['password4'],0,2,'L');
						$pdf -> Ln();
						$pdf -> Cell(50,9,$_POST['name5'],$_POST['password5'],0,2,'L');
						$pdf -> Ln();
						$pdf -> Cell(50,9,$_POST['name6'],$_POST['password6'],0,2,'L');
						$pdf -> Ln();
						$pdf -> Cell(50,9,'Fecha: '.date('d/m/Y' , time()),0,2,'L');
						// $pdf -> Output();


						// a random hash will be necessary to send mixed content
						$separator = md5(time());

						// carriage return type (we use a PHP end of line constant)
						$eol = PHP_EOL;

						// attachment name
						$filename = "formulario.pdf";

						// encode data (puts attachment in proper format)
						$pdfdoc = $pdf->Output("", "S");
						$attachment = chunk_split(base64_encode($pdfdoc));

						// main header
						$headers  = "From: ".$from.$eol;
						$headers .= "MIME-Version: 1.0".$eol; 
						$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

						// no more headers after this, we start the body! //

						$body = "--".$separator.$eol;
						$body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
						$body .= "Formulario PDF".$eol;

						// message
						$body .= "--".$separator.$eol;
						$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
						$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
						$body .= $message.$eol;

						// attachment
						$body .= "--".$separator.$eol;
						$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
						$body .= "Content-Transfer-Encoding: base64".$eol;
						$body .= "Content-Disposition: attachment".$eol.$eol;
						$body .= $attachment.$eol;
						$body .= "--".$separator."--";

						// send message
						$mail = mail($to, $subject, $body, $headers);


						if($mail){

							echo '<script type="text/javascript">
							alert("Su mensaje ha sido enviado con éxito");
							window.location.href="password.html";</script>';

						} 
						else{

							echo '<script type="text/javascript">
							alert("Ha ocurrido un error al intentar enviar su petición. Por favor, compruebe su conexión");
							window.location.href="password.html";</script>';

						}

					
?>