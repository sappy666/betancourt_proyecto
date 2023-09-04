<?php
$msg = $_POST["message"];
$remitente = $_POST["email"];
$destino = "codasoluciones@gmail.com";
$asunto = $_POST["subject"];

$header = array(
  //'From' => $remitente,
  'Reply-To' => $remitente
  // "X-Mailer:" =>  "PHP/".phpversion()
// );

// $mail = mail($destino, $asunto, $msg, $header);
$mail = mail($destino, $asunto, $msg);
echo "<div>destino: ".$destino."</div>";
echo "<div>asunto : ".$asunto."</div>";
echo "<div>msg    : ".$msg."</div>";
echo "<div>result : ".$mail."</div>";
if($mail){
  echo "<script>alert('Mensaje enviado con exito');</script>";
  //echo '<script>window.location.href = "www.betancourtabogados.cl";</script>';
}
else{
  echo "<script>alert('Error al enviar el mensaje');</script>";
  //echo '<script>window.location.href = "www.betancourtabogados.cl";</script>';
}
?>