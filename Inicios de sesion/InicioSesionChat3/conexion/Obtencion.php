<?php
require("../../../conexion/db.php");
 
session_start();
$id = $_POST["identidad"];
$nombreUsuario = $_POST["nombreUsuario"];
$clave = $_POST["contraseña"];

$consulta = "SELECT * FROM usuarios where id = $id and aes_decrypt(clave,'familiamc123456789')='$clave'and nombreUsuario = '$nombreUsuario'";

$query = mysqli_query($conexion , $consulta );

if( mysqli_num_rows($query) > 0 ){
    $_SESSION['userName'] = $nombreUsuario;
    $_SESSION['identidad'] = $id;
    echo "<script> alert('Inicio de sesion valido ');
    location.href = '../../../salasChat/chatNO3/chatPrin.php';</script>";
    
}else{
    echo "<script> alert('Usuario no encontrado');
    location.href = '../index.html';</script>";
}

mysqli_close($conexion);


?>