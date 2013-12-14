<?php

//Manejo de las sugerencias: El texto introducido sera enviado por e-mail.

$_Sugerencias=$_POST['comments'];
$fcoments = $date . " Sugerencias\t" . $_Sugerencias."\n";
$toadress= "beckermd@gmail.com";
$fromadress= "danielabecker@danielas-air.tx.rr.com";
$subject ="Enviado desde la Web de Beckys";

$mailcontent = $_Sugerencias;

if( $_Sugerencias!=null) {
	mail($toadress,$subject,$mailcontent,$fromadress);
	echo "Gracias por sus comentarios. <br/>";
	echo "El contenido que fue enviado es: <br/>". nl2br($mailcontent)."<br/>";
}
else {

}
//$fc = fopen ( "sugerencias.txt", "a" );
// flock ( $fc, LOCK_EX );
// fwrite ( $fc, $fcoments );
// flock ( $fc, LOCK_UN );
// fclose ( $fc );




?>