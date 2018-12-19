
<?php
$para      = 'nobody@example.com';
$titulo    = 'El título';
$mensaje   = 'Hola';
$cabeceras = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: angeles.fuent.exp@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>