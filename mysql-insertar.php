<?php
include_once "mysql-con.php";

//Aqui definimos la sentencia SQL que vamos a ejecutar
//$sql = "insert into producto (descripcion,precio,stockMinimo) values (?, ?, ?)";
$sql = "call Insertar_Producto( ?, ?, ? )";

//Aqui preparamos a la clase para ejecutar la sentencia
$smt = $dbh->prepare($sql);

//Definimos los nuevos valores a insertar
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$stockMinimo = $_POST["stock"];

//Hacemos "bind" (enlaces) de los parametros (?)
$smt->bindParam(1, $descripcion);
$smt->bindParam(2, $precio);
$smt->bindParam(3, $stockMinimo);

//Finalmente ejecutamos la sentencia sobre la BD
$smt->execute();

echo "<br>Se INSERTO un nuevo registro en la tabla producto";

header("Location: form-listar.php");

?>