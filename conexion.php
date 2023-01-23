<?php
/*$conexion = mysqli_connect("localhost","root","","lista_productos");*/
function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $db = "lista_productos";

    $con = mysqli_connect($host, $user, $pass);
    mysqli_select_db($con, $db);

    return $con;
}
