<?php
include_once("conexion.php");
if(!empty($_GET['id'])){
    $clave = $_GET['id'];
    $consulta = mysqli_query($conexion,"DELETE FROM usuarios WHERE id_Usuario = $clave");
    mysqli_close($conexion);
    header("Location:../Cliente/usuarios.php");
}
?>