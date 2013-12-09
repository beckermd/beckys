<?php
include 'connection.php';

$_Sugerencias=$_POST['comments'];
$_NameS=$_POST['NameSugerencia'];

$queryResult = mysql_query(
    "INSERT INTO beckys.sugerencias (Name, Sugerencias)
  VALUES('$_NameS', '$_Sugerencias')");
if (!$queryResult) {
    print($queryResult);
    die('Invalid query: ' . mysql_error());
}

echo "Gracias ".$_NameS." por sus comentarios!";
