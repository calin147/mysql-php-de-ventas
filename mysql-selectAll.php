<?php
include_once "mysql-con.php";
$mensaje_para_usuario = "";

try
{

    //Aqui definimos la sentencia SQL que vamos a ejecutar
    $sql = "call Seleccionar_Producto()";


    //Aqui preparamos a la clase para ejecutar la sentencia
    $smt = $dbh->prepare($sql);

    //Ejecutamos la sentencia
    $smt->execute();

    //Recuperamos todos los registros en un ARRAY ASOCIATIVO (FETCH_ASSOC)
    $productos = $smt->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e)
{
    $productos = array();
    $mensaje_para_usuario = "No podemos mostrarte los productos. Llama a sistemas!";

    $message_error = date("Y-m-d H:m:s");
    $message_error .= " - Ocurrio un error: ".$e->getMessage()."\n";
    error_log ( $message_error,3,"C:\Users\Alumno-DG\Downloads\app.err");

}

?>