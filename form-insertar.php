<!doctype html>
<html lang="">
<head> 
    <meta charset="UTF-8">
    <title></title>

    <link rel="stylesheet" type="text/css"
        href="bootstrap-4.1.3-dist/css/bootstrap.min.css">    

    <link rel="stylesheet" type="text/css"
        href="vendor/DataTables-1.10.18/css/dataTables.bootstrap4.css"">    

    <sc
</head>
<body class="p-3">

<div class="shadow-lg p-3 mb-5 bg-white rounded w-75">
    <h1 class="display-6">Agregar producto</h1>

    <form action="mysql-insertar.php" method="post">

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Descripcion</label>
    <div class="col-sm-10">
    <input type="text" id="descripcion" name="descripcion" class="form-control form-control-lg">
    </div>
    </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Stock</label>
    <div class="col-sm-10">
    <input type="text" id="stock" name="stock" class="form-control form-control-lg">
    </div>
    </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Precio</label>
    <div class="col-sm-10">
    <input type="text" id="precio" name="precio" class="form-control form-control-lg">
    </div>
    </div>

    <button type="submit" class="btn btn-primary">Grabar</button>
    <button type="cancel" class="btn btn-secondary">Cancelar</button>


    </form>
    </div>

</body>
</html>