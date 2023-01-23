<?php
include("./include/header.php");
include("./conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id = '$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <div class="container mt-5">
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
        <div class="form-group">
            <input type="text" name="descripcion" class="form-control mb-3" value="<?php echo $row['descripcion'] ?>">
        </div>
        <div class="form-group">
            <input type="number" name="cantidad" class="form-control mb-3" value="<?php echo $row['cantidad'] ?>">           
         </div>
            <input type="submit" class="btn btn-success btn btn-block mb-3" value="Actualizar">
        </form>
    </div>





<?php include("include/footer.php");?>