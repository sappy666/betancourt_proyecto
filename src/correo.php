<?php
$msg = $_POST["message"];
$remitente = $_POST["email"];
$destino = "codasoluciones@gmail.com";
$asunto = $_POST["subject"];

$header = "From: " . $remitente ."\r\n";
$header .= "Reply-To:". $remitente . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion();

$mail = @mail($destino, $asunto, $msg, $header);

if($mail){
  echo "<script>alert('Mensaje enviado con exito');</script>";
  echo '<script>window.location.href = "www.betancourtabogados.cl";</script>';
}
else{
  echo "<script>alert('Error al enviar el mensaje');</script>";
  echo '<script>window.location.href = "www.betancourtabogados.cl";</script>';
}
?>