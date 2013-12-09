<?php
include 'connection.php';

$_CyQ = $_POST ['CQ'];
$_JyQ = $_POST ['JyQ'];
$_TAyQ = $_POST ['TAyQ'];
$_CyP = $_POST ['CyP'];
$_JQyR = $_POST ['JQyR'];

$_Name = $_POST ['Name'];
$_Adress = $_POST ['Adress'];
$_Adress2 = $_POST ['Adress2'];
$_Phone = $_POST ['Phone'];

/*
 *   UserID INT PRIMARY KEY NOT NULL,
  Name varchar (255) NOT NULL,
  Adress varchar (255) NOT NULL,
  Adress2 varchar (255) NOT NULL,
  Phone INT NOT NULL,
  KGCYQ INT NOT NULL,
  KGJYQ INT NOT NULL,
  KGTAYQ INT NOT NULL,
  KGCYP INT NOT NULL,
  KGJQYR INT NOT NULL
 */
$queryResult = mysql_query(
    "INSERT INTO beckys.Pedidos (Name,Adress,Adress2,Phone,KGCYQ,KGJYQ,KGTAYQ,KGCYP,KGJQYR)
  VALUES('$_Name', '$_Adress','$_Adress2' ,'$_Phone','$_CyQ','$_JyQ','$_TAyQ','$_CyP','$_JQyR')");
if (!$queryResult) {
    print($queryResult);
    die('Invalid query: ' . mysql_error());
}

echo "El pedido fue cargado..Lo esperamos pronto!";

?>