<?php

date_default_timezone_set ( 'UTC' );

define ( 'PRECIOR', 50 );
define ( 'PRECIOS', 40 );
$date= date('H:i, jS F');
$date2= date('l jS F', strtotime('+5 days'));


//Variables de la Planilla de Pedidos
$_CyQ = $_POST ['CQ'];
$_JyQ = $_POST ['JyQ'];
$_TAyQ = $_POST ['TAyQ'];
$_CyP = $_POST ['CyP'];
$_JQyR = $_POST ['JQyR'];
$_KgTotal = $_JQyR + $_CyP + $_CyQ + $_JyQ + $_TAyQ;
$_PrecioTotal = $_KgTotal * PRECIOR;
if ($_KgTotal == 0) {
	echo "Usted no ordeno nada<br/>";
} else {
	echo "Su pedido es: <br/>";
	echo "$_CyQ.  Kg de milanesas de Cebolla y Queso <br/>";
	echo "$_JyQ.  Kg de milanesas de Jamon y Queso <br />";
	echo "$_TAyQ.  Kg de milanesas de Tomate Jamon y Queso <br />";
	echo "$_CyP.   Kg de milanesas de Calabaza y Parmesano <br />";
	echo "$_JQyR.  Kg de milanesas de Jamon, Queso y Roquefort <br />";
	echo "El total son: " . $_KgTotal . "Kg <br/>";
	echo "El precio total es: $" . number_format ( $_PrecioTotal, 2 ) . " (no incluye delivery) <br/>";
}
// Variable de la planilla de Envio.
$_Name = $_POST ['Name'];
$_Adress = $_POST ['Adress'];
$_Adress2 = $_POST ['Adress2'];
$_Phone = $_POST ['Phone'];

// VAriable de la Planilla de Horario

$_Maniana = $_POST ['Entrega_Maniana'];
$_Tarde = $_POST ['Entrega_Tarde'];
$_Noche = $_POST ['Entrega_Noche'];

if ($_Maniana) {
	echo "La entrega se realizara el dia".$date2. " en el horario: " . $_Maniana;
}
if ($_Tarde) {
	echo "La entrega se realizara el dia".$date2. " en el horario: " . $_Tarde;
}
if ($_Noche) {
	echo "La entrega se realizara el dia" .$date2." en el horario:". $_Noche;
}

$fdata=  $date."\t". $_CyQ. "Kg de Cebolla y Queso\t"
		.$_JYQ . "Kg de Jamon y Queso\t"
        .$_TAyQ. "Kg de Tomate aceitunas y Queso\t" 
        .$_CyP. "Kg de Calabaza y Parmesano\t" 
        .$_JQyR. "Kg de Jamon Queso y Roquefort\t"
		 .$_Name."Name\t"
 		 .$_Adress."Adress\t"
	     .$_Adress2."Adress2\t"
	 	 .$_Phone."Phone\t";

$fp = fopen ( "pedido.txt", "a" );

	flock ( $fp, LOCK_EX );
	fwrite ( $fp, $fdata );
	flock ( $fp, LOCK_UN );
	fclose ( $fp );

?>





