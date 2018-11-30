<!doctype html>
<html lang="">
<head> 
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
//Verificamos si la variable esta seteada
if ( isset($_REQUEST["codigo"]))
{
    //pre-cargamos los datos del producto
    include_once "mysql-select.php";
}
?>
    <form action="mysql-update.php" method="post">
        Código Producto: 
        <input type="text" 
            id="codigo" name="codigo" value="<?php echo $productos[0]["idProducto"];?>"><br>

        Descripcion: 
        <input type="text" 
            id="descripcion" name="descripcion" value="<?php echo $productos[0]["descripcion"];?>"><br>

        Stock: 
        <input type="text" 
            id="stock" name="stock" value="<?php echo $productos[0]["stockMinimo"];?>"><br>

        Precio: 
        <input type="text" 
            id="precio" name="precio" value="<?php echo $productos[0]["precio"];?>"><br>

        <button type="submit">Enviar informacion</button>
    </form>
</body>
</html>