<?php
require("../../../conexion/db.php");
 
session_start();
$id = $_POST["identidad"];
$nombreUsuario = $_POST["nombreUsuario"];
$clave = $_POST["contraseña"];
$tipoUsuario = $_REQUEST["tipoUsuario"];

$consulta = "SELECT * FROM usuarios where id = $id and aes_decrypt(clave,'familiamc123456789')='$clave'and nombreUsuario = '$nombreUsuario'and tipoUsuario='$tipoUsuario'";

if ($tipoUsuario == "Asesor"){
    $query = mysqli_query($conexion , $consulta );

    if( mysqli_num_rows($query) > 0 ){
        $_SESSION['userName'] = $nombreUsuario;
         $_SESSION['identidad'] = $id;
        echo "<script> alert('Inicio de sesion valido ');
        location.href = '../salasAsesor/index.html';</script>";
    
    }else{
     echo "<script> alert('Usuario no encontrado');
        location.href = '../index.html';</script>";
    }

}else{

    $query = mysqli_query($conexion , $consulta );

    if( mysqli_num_rows($query) > 0 ){
        $_SESSION['userName'] = $nombreUsuario;
        $_SESSION['identidad'] = $id;
        echo "<script> alert('Inicio de sesion valido ');
        location.href = '../../../interfazAdministrador/index.php';</script>";
    
    }else{
     echo "<script> alert('Usuario no encontrado');
        location.href = '../index.html';</script>";
    }


}


mysqli_close($conexion);


?>