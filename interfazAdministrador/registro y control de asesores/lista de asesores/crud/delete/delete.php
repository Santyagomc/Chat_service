<?php 
require("../../../../../conexion/db.php");




$insertar = "DELETE  FROM usuarios where id = '$id'";

$query = mysqli_query($conexion , $insertar);

if ($query) {
    echo "<script> alert('Eliminado con exito');
    location.href = '../../index.php';</script>";
}else{
    echo "<script> alert('El usuario no se pudo Eliminar');
    location.href = '../../index.php';</script>";

}

?>