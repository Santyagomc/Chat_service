<?php require("../../conexion/db.php");
 session_start();?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	 <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/custom-responsive-style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- paginacion-->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.5/css/autoFill.bootstrap4.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.5/js/dataTables.autoFill.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.5/js/autoFill.bootstrap4.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.js"></script>
    
    <title>Lista de Usuarios</title>
</head>

<body>
      <h2 class="text-center">Lista de Usuarios</h2> 
<div class="container-fluid">
      <table class="table" id="Paginacion">
        <thead class="thead-dark"> 
        <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">  Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Nombre de usuario</th>
      <th scope="col">Tipo de usuario</th>
    </tr>
    </thead>
    
    
    <?php 

        $consulta= "SELECT * FROM usuarios where tipoUsuario = 'Visitante'";
        $sql = mysqli_query($conexion,$consulta);

        if( mysqli_num_rows($sql) > 0 ){
    
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($sql)) {
                
                echo  "<tr>"."<td>".$row['id']."</td>"."<td>".$row['nombre']."</td>"."<td>".$row['apellido']."</td>"."<td>".$row['correo']."</td>"."<td>".$row['nombreUsuario']."</td>"."<td>".$row['tipoUsuario']."</td>"."</tr>"; 
                
            }
            echo "</tbody>";
           
            
        }else{
            echo "No hay ningun resultado";
        }
        
        mysqli_close($conexion);
    
    ?>
    </table>
    </div>


<div class="text-center" >
<script type="text/javascript" >
    $(document).ready( function () {
        $('#Paginacion').DataTable( {
          language: {
            paginate: {
                next: ">", 
            previous: "<"
            },
          search: "_INPUT_",
              searchPlaceholder: "Busca a tus usuarios",
          info: "",
          infoFiltered: "Se han filtrado _MAX_ entradas",
          infoEmpty: "No se han encotrado entradas ",
          zeroRecords: "<h3>No hay usuarios registrados</h3>"
        },
        pageLength: 10,
        ordering: false,
        select: false,
        responsive: true,
        autoWidth: false,
        lengthChange: false,
      });
    });
  </script>
  <div class="row">
  <div class="col-md-6">  
  <a  href="../index.php" class="btn btn-outline-danger">Volver al panel</a>
  </div>
  <div class="col-md-6"> 
  <a  href="reportes.php" class="btn btn-outline-info">Exportar a archivo PDF</a>
  </div>
  </div>

</div>
<br>
 <footer id="Footer">
    <div class="container text-center">
      <div class="footer-text ">
           <h3 class="text-center text-white"><em >CHAT-SEVICE</em></h1>
       <h5 class="text-center text-white"><em >Elaborado por Santiago Murcia y Carlos Antonio Gonzalez </em></h3>
        <br>
        <h3 class="text-white">Cerrar Sesion</h3><a title="Read More" href="../cerrar Sesion/cerrarSesion.php"><i class="fa fa-arrow-right" aria-hidden="true" ></i></a>

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


</body>
</html>