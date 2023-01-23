<?php
include ("include/header.php");
include("./conexion.php");
$con = conectar();

$sql = "SELECT * FROM productos";
$query = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">

<div class="row">

<div class="col-md-4">
        <div class="card card-body">
        <form action="insert.php" method="POST">
        <div class="form-group">
                <input type="number" name="id" class="form-control mb-3" placeholder="Id">
        </div>
            <div class="form-group">
                <input type="text" name="descripcion" class="form-control mb-3"  placeholder="Descripción del producto" autofocus>
            </div>
            <div class="form-group">
                <input type="number" name="cantidad" class="form-control mb-3" placeholder="Cantidad">
            </div>
           
            <input type="submit" class="btn btn-success btn btn-block mb-3" name="guardar" value="Guardar">
        </form>
        </div>
</div>
    <div class="col-md-8">
<table class="table">
  <thead class="table-success">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Descripción</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Fecha de Creación</th>
        <th></th>
        <th></th>
        </tr>
  </thead>
  <tbody>
    
        <?php 
        while($row = mysqli_fetch_array ($query)){
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['descripcion'] ?></td>
            <td><?php echo $row['cantidad'] ?></td>
            <td><?php echo $row['fecha_creacion'] ?></td>
            <td> <a href="actualizar.php?id=<?php echo $row['id'] ?>" class = "btn btn-info">Editar</a></td> 
            <td> <a href="delete.php?id=<?php echo $row['id'] ?>" class = "btn btn-danger">Eliminar</a></td> 
        </tr>
        <?php 
        } 
        ?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
