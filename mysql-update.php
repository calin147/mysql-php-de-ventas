<?php
include_once "mysql-con.php";


//Aqui definimos la sentencia SQL que vamos a ejecutar
$sql = "call Actualizar_Producto( ?, ?, ?, ? )";

//Aqui preparamos a la clase para ejecutar la sentencia
$smt = $dbh->prepare($sql);

//Definimos los nuevos valores a insertar
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$stockMinimo = $_POST["stock"];
$idProducto = $_POST["codigo"];

//Hacemos "bind" (enlaces) de los parametros (?)
$smt->bindParam(1, $descripcion);
$smt->bindParam(2, $stockMinimo);
$smt->bindParam(3, $precio);
$smt->bindParam(4, $idProducto);


//Finalmente ejecutamos la sentencia sobre la BD
$smt->execute();

echo "<br>Se ACTUALIZO el registro en la tabla producto";

header("Location: form-listar.php");
?>