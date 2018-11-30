<?php
include_once "mysql-con.php";


//Aqui definimos la sentencia SQL que vamos a ejecutar
$sql = "call Eliminar_Producto( ? )";

//Aqui preparamos a la clase para ejecutar la sentencia
$smt = $dbh->prepare($sql);

//Definimos los nuevos valores a insertar
$idProducto = $_REQUEST["codigo"];

//Hacemos "bind" (enlaces) de los parametros (?)
$smt->bindParam(1, $idProducto);

//Finalmente ejecutamos la sentencia sobre la BD
$smt->execute();

echo "<br>Se ELIMINO el registro en la tabla producto";

header("Location: form-listar.php");
?>