<?php 
include("./include/header.php");

include("./conexion.php");
$con = conectar();

$id = $_POST ['id'];
$descripcion = $_POST ['descripcion'];
$cantidad = $_POST ['cantidad'];
$fecha = date('Y-m-d H:i:s');

$sql = "INSERT INTO `productos` (`id`, `descripcion`, `cantidad`, `fecha_creacion`)
 VALUES (NULL, '{$descripcion}', '{$cantidad}', '{$fecha}');";
$query = mysqli_query($con, $sql);

if($query){
  Header("Location:index.php");
}
  ?>

<?php include("include/footer.php");?>