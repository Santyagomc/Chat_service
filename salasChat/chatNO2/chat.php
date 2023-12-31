<link rel="stylesheet" href="../css/bootstrap.min">
<?php //php control de tiempo
 
 date_default_timezone_set("America/bogota");
    $hora = date("h");
    $indice = date("a");  
    
    if ($hora < 12 and  $indice == "am") {
        echo "<b>Muy buenos dias señor(a), estamos trabajando para ofrecerle un muy buen servicio y ayudarle en su necesidad, gracias por contar con nosotros.  </b>";
    }elseif ($hora <= 12 and $hora <6 and $indice == "pm"){
        echo "<b>Muy buenos tardes señor(a), estamos trabajando para ofrecerle un muy buen servicio y ayudarle en su necesidad, gracias por contar con nosotros.</b>";
    }elseif ($hora >=6 and $indice == "pm"){
        echo "<b>Muy buenos noches señor(a), estamos trabajando para ofrecerle un muy buen servicio y ayudarle en su necesidad, gracias por contar con nosotros.</b>";
    }
    
    session_start();
    $userName = $_SESSION['userName'];
?>

<?php 
 include "../../conexion/db.php";
 
            $consulta = "SELECT mensaje,fecha FROM chat WHERE salaChat = 2 ORDER BY numeroMensajes DESC"; //muestra o retorno de mensajes
            $ejecutar = $conexion->query($consulta);
            while($fila = $ejecutar-> fetch_array()):
                
 ?>
        
         <div class="datos_chat "> <!--datos chat-->
         <span style="color: #1c62c4"></span>
         <div class="row">
            <div class="col-md-2">
          <span style="color: #1c62c4">-</span>
            </div>
            <div class="col-md-8">
            <span class="container " ><p><?php echo $fila["mensaje"];?></p></span>
            </div>
            <div class="col-md-2">
            <span class ="text-muted" style="float:right"><?php echo formatearFecha ($fila["fecha"]);?></span>
            </div>
          </div>
        </div>
 <?php  endwhile; ?>