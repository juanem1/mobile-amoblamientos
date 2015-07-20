<?php
//vars
$subject = $_POST['subject'];
$from = $_POST['email'];

//data
$msg = "Nombre: "  .$_POST['nombre']    ."<br>\n";
$msg .= "E-mail: "  .$_POST['email']    ."<br>\n";
$msg .= "Telefono: "  .$_POST['telefono']    ."<br>\n";
$msg .= "Comentarios: "  .$_POST['comments']    ."<br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;

mail('luis@luiszuno.com', $subject, $msg, $headers);