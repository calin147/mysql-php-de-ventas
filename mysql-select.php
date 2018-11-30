<?php
include_once "mysql-con.php";

//Aqui definimos la sentencia SQL que vamos a ejecutar
$sql = "call Seleccionar_Producto_PorID( ? )";


//Aqui preparamos a la clase para ejecutar la sentencia
$smt = $dbh->prepare($sql);

//Enlazamos parametros
$idProducto = $_GET["codigo"];
$smt->bindParam(1, $idProducto); 

//Ejecutamos la sentencia
$smt->execute();

//Recuperamos todos los registros en un ARRAY ASOCIATIVO (FETCH_ASSOC)
$productos = $smt->fetchAll(PDO::FETCH_ASSOC);
?>