
<?php

try {
    $dbname = "ventas";
    $user = "root";
    $password = "";
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $dbh = new PDO( $dsn, $user, $password);
    
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    //Esta porcion de codigo se ejecuta únicamente
    //Si hay algun error en las lineas de arriba (bloque TRY)
    //echo "Error: ".$e->getMessage();
    $dbh = null;

    $message_error = date("Y-m-d H:m:s");
    $message_error .= " - Ocurrio un error: ".$e->getMessage()."\n";
    error_log ( $message_error
        ,3
        ,"C:\Users\Alumno-DG\Downloads\app.err");
}

?>