<!doctype html>
<?php
include_once "mysql-selectAll.php";
?>
<html lang="">
<head> 
    <meta charset="UTF-8">
    <title></title>

    <!-- Llamada a estilos de bootstrap -->
    <link rel="stylesheet" type="text/css"
        href="bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <!-- Llamada a estilos de DataTable -->
    <link rel="stylesheet" type="text/css"
        href="vendor/DataTables-1.10.18/css/dataTables.bootstrap4.css">

    <!-- Llamada a JS de Query, necesario para usar DataTable -->
    <script type="text/javascript" charset="utf8" src="vendor/jquery-3.3.1.min.js" ></script>        
    <!-- Llamada a JS del DataTable -->
    <script type="text/javascript" charset="utf8" src="vendor/DataTables-1.10.18/js/jquery.dataTables.min.js" ></script>        

</head>
<body class="p-3">
    <?php $mensaje_para_usuario = "Ocurrio un error"; ?>

    <br>
    <a href="form-insertar.php" class="btn btn-secondary" >Nuevo producto</a>
    <br><br>
    <div class="alert alert-danger" role="alert"><?php echo $mensaje_para_usuario; ?></div>
    <br>
    <table id="myTable" name="myTable" class="table table-striped w-100">
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($productos as $producto)
        {?>
            <tr>
                <td><?php echo $producto["descripcion"]; ?></td>
                <td><?php echo $producto["stockMinimo"]; ?></td>
                <td><?php echo $producto["precio"]; ?></td>
                <td>
                    <a href="form-update.php?codigo=<?php echo $producto["idProducto"]; ?>" class="btn btn-primary btn-sm">
                    Editar
                    </a>
                    <a href="mysql-delete.php?codigo=<?php echo $producto["idProducto"]; ?>" class="btn btn-danger btn-sm">
                    Eliminar
                    </a>
                </td>
            </tr>
        <?php }
        ?>
        </tbody>
    </table>


</body>
</html>

<!-- Llamada a la funcion DataTabel para re-definir comportamiento de tabla -->
<script>

$(document).ready( function () {
    $('#myTable').DataTable(
        {
        "order": [[ 2, "asc" ]]
        }
    );
} );

</script>