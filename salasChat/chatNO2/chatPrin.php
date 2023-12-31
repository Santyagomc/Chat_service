
<?php require("../../conexion/db.php");
session_start();  
 $userName = $_SESSION['userName'];
 $id = $_SESSION["identidad"];
  if (!$id) { //verificacion de la sesion
     echo "<script> alert('Lo sentimos, debes iniciar sesion ');
    location.href = '../../index.html';</script>";
  }else{
  
  

 ?>


<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css"  >
    <link rel="stylesheet" href="../../css/estilosChat.css">
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="stylesheet" href="../../css/custom-responsive-style.css">
    <link rel="stylesheet" type="text/css" href="../../css/util.css">
  <link rel="stylesheet" type="text/css" href="../../css/main.css">
  <link rel="stylesheet" type="text/css" href="../../css/main.css">
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/custom-responsive-style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="librerias/sweetAlert/sweetalert2.all.min.js" ></script>
  <script src="js/SweetAlert.js"></script>
    
    <title>CHAT</title>

    <script type="text/javascript">
      function ajax(){
          var req = new XMLHttpRequest();

          req.onreadystatechange = function(){
            if (req.readyState == 4 && req.status == 200){
              document.getElementById("chat").innerHTML = req.responseText;
            }
          }
          req.open("GET", "chat.php", true);
          req.send();
    }
        //refrescar automaticamente la pagina
        setInterval(function(){ajax();},1000);

  </script>


  </head>
  <body class= "bg-dark" onload="ajax();">
    
  
    <div class="container cont bg-white"> <!-- contenedor-->
    <br>

    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 logo" >
        <img class='rounded bg-dark' width='200px' height="-500" src='../../images/logo.png' alt="">
        </div>

       <div class="col-sm-8">
         <p>
           <br>
             Muchas gracias por ingresar a nuestras salas de chat, ahora mismo estas hablando directamente con un asesor, esperamos que resuelva tus dudas y cumpla con tus espectativas.Por favor se respetuoso con nuestros asesores y ten en cuenta que trabajamos por tus necesidades.
           </br>
         </p>
        </div>
      </div>
      <hr>
      </div>
      <br>
      
    <div class="container cont bg-white"> <!-- contenedor-->
      <div class="container logo">
      <h1 class="text-center">Bienvenid@ <?php echo " ".$userName; ?></h1>
      </div>
      <div class="container caja_chat"> <!-- caja chat-->
        <section class="container" id="chat"  > <!-- chat -->
        </section>
      </div>
      <form method="post" action="chatPrin.php">
        <div class="wrap-input100 validate-input" data-validate="Escribe tu mensaje">
            <textarea class="input100" name="mensaje" ></textarea>
            <span class="focus-input100"></span>
            <span class="label-input100">Ingresa tu mensaje</span>
          </div>
        
        <input type="submit" class="btn btn-info" name="enviar" value="Enviar">
        <br>
        <br>
      </form>
      <button type="button" class="btn btn-danger container-fluid" name="reinicio" data-toggle="modal" data-target="#staticBackdrop">Restaurar mensajes
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Identificacion de administrador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="eliminarMensaje.php" method="post">
        <div class="modal-body">
        
          <div class="wrap-input100 validate-input" data-validate="El codigo es requerido">
            <input class="input100" type="text" name="codigo" required autocomplete="off">
            <span class="focus-input100"></span>
            <span class="label-input100">Identificacion de administrador</span>
          </div>
         <div class="alert alert-info" role="alert">
                Debes ingresar tu <strong>numero de identidad </strong>si eres asesor.
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <br>
        <input type="submit" name="reinicio" class="btn btn-primary"></input>
        <br>
      </div>
      </form>
    </div>
  </div>
</div>
      <br>
    <?php
      if(isset($_POST["enviar"])){ //validacion del nomrbe y el mensaje
          
          $mensaje = $_POST["mensaje"];
          $consulta = "INSERT INTO chat (mensaje,salaChat,idUser) VALUES ('$mensaje','2','$id')" ; //insertar en la base de datos 
          $ejecutar = $conexion->query($consulta);

            if($ejecutar){
              
            }else{
              echo "<script> alert('Mensaje no enviado');</script>";
            }
      }

      
      
    ?>
    </div>
  </div>
    <br>

    <footer id="Footer">
    <div class="container text-center">
      <div class="footer-text ">
           <h3 class="text-center text-white"><em >CHAT-SEVICE</em></h1>
       <h5 class="text-center text-white"><em >Elaborado por Santiago Murcia y Carlos Antonio Gonzalez </em></h3>
        <br>
        <h3 class="text-white">Cerrar Sesion</h3><a title="Read More" href="cerrarSesion.php"><i class="fa fa-arrow-right" aria-hidden="true" ></i></a>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="copy-right">
              <p>© Santiago Murcia - Carlos Gonzales, Inc.</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
            <div class="social-share">
              <ul>
                <li>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-pinterest"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="designed">Politicas de privacidad  <a href="#" data-toggle="modal" data-target="#exampleModal">
            Ver
        </a>

<!-- politicas de privacidad -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header cabeza">
        <h5 class="modal-title text-white" id="exampleModalLabel">POLITICAS DE PRIVACIDAD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-dark">
        <p>El presente Política de Privacidad establece los términos en que Chat-service usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.</p><p><strong>Información que es recogida</strong></p><p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,&nbsp; información de contacto como&nbsp; su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación.</p><p><strong>Uso de la información recogida</strong></p><p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios. &nbsp;Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.</p><p>Chat-service está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.</p><p><strong>Cookies</strong></p><p>Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico web, y también facilita las futuras visitas a una web recurrente. Otra función que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.</p><p>Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de usted, a menos de que usted así lo quiera y la proporcione directamente, <a href="" target="_blank"></a>. Usted puede aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.</p><p><strong>Enlaces a Terceros</strong></p><p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.</p><p><strong>Control de su información personal</strong></p><p>En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.&nbsp; Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico. &nbsp;En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.</p><p>Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.</p><p>Chat-service Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.</p><p>Esta politica de privacidad se han generado en <a href="https://politicadeprivacidadplantilla.com/" target="_blank">politicadeprivacidadplantilla.com</a>.<br></p>
      </div>
      <div class="modal-footer cabeza">
        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
         
      </div>
    </div>
  </div>
</div>
</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

   <?php
             
      }
      ?>
    <script src="../../js/jquery.min.js"  ></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"  ></script>
    
  </body>
</html>