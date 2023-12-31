
<?php 
  require("../../conexion/db.php");

	$clave = $_POST['clave'];
	$verificacion = "SELECT aes_decrypt(clave,'familiamc123456789') from `usuarios` WHERE aes_decrypt(clave,'familiamc123456789') = '$clave' and tipoUsuario = 'Asesor'"; //verifica si el numero esta en la base de datos 
    $sql = mysqli_query($conexion,$verificacion);

    if( mysqli_num_rows($sql) > 0 ){
        while ($row = mysqli_fetch_assoc($sql)) {
                $codigoVerificado =$row["aes_decrypt(clave,'familiamc123456789')"];}
        if ($clave == $codigoVerificado) {
	    $consulta = "DELETE FROM `chat` WHERE salaChat = 1 "; //eliminar los mensajes en la base de datos 
        $ejecutar = $conexion->query($consulta);
        
        if($ejecutar){
          echo "<script> 
          alert('mensajes eliminados');
          location.href = 'chatPrin.php';</script>";
        }else{
          echo "<script> alert('ups, ha ocurrido un error al eliminar los mensajes');
          location.href = 'chatPrin.php';</script>";
        }
	}else{
		echo "<script> 
          alert('Codigo de administrador incorrecto');
          location.href = 'chatPrin.php';</script>";
	}
}else{
	echo "<script> 
          alert('Esta identificacion no se encuentra registrada');
          location.href = 'chatPrin.php';</script>";

}
       
?>
        
        

