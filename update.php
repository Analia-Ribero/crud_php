<?php 
include("./include/header.php");
include("./conexion.php");
$con = conectar();

$id = $_POST ['id'];
$descripcion = $_POST ['descripcion'];
$cantidad = $_POST ['cantidad'];

$sql = "UPDATE productos SET descripcion = '$descripcion', cantidad = '$cantidad'  WHERE id = '$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location:index.php");
  }
?>
<?php include("include/footer.php");?>