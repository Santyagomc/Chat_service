<?php
require("../../conexion/db.php");
 
$id = $_POST["identidad"];
$nombreUsuario = $_POST["nombreUsuario"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$clave = $_POST["contraseña"];


$insertar = "INSERT INTO usuarios VALUES ( $id,'$nombre','$apellido','$correo',AES_ENCRYPT('$clave','familiamc123456789'),'$nombreUsuario','Visitante')";

$query = mysqli_query($conexion , $insertar);

if ($query) {
    echo "<script> alert('Registrado correctamente');
    location.href = '../../index.html';</script>";
}else{
    echo "<script> alert('El usuario registrado ya existe intente con otro');
    location.href = '../index.html';</script>";

}


?>