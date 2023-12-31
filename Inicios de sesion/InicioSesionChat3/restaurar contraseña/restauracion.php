 <?php
	require("../../../conexion/db.php");

$id = $_POST["identidad"];
$clave = $_POST["contraseña"];



$consulta = "UPDATE `usuarios` SET `clave`= AES_ENCRYPT('$clave','familiamc123456789') WHERE id = $id ";

$query = mysqli_query($conexion , $consulta )or die(mysql_error());

if( $query){
    
   
    echo "<script> alert('Tu contraseña ha sido cambiada ');
    location.href = '../index.html';</script>";
    
}else{
    echo "<script> alert('Ha ocurrido un error al cambiar la contraseña');
    location.href = '../index.html';</script>";
}

mysqli_close($conexion);







?>