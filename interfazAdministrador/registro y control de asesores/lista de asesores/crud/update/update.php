<?php 

require("../../../../../conexion/db.php");
 
$id = $_POST["identidad"];
$nombreUsuario = $_POST["nombreUsuario"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$tipoUsuario = $_POST["tipoUsuario"];

$insertar = "UPDATE usuarios SET nombre='$nombre',apellido= '$apellido',correo='$correo',nombreUsuario='$nombreUsuario',tipoUsuario= '$tipoUsuario' WHERE id= '$id'";

$query = mysqli_query($conexion , $insertar);

if ($query) {
    echo "<script> alert('Modificado con exito');
    location.href = '../../index.php';</script>";
}else{
    echo "<script> alert('El usuario no se pudo modificar');
    location.href = '../../index.php';</script>";

}




?>