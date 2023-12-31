<?php session_start();
$id = $_SESSION["identidad"];

  if (!$id) { //verificacion de la sesion
     echo "<script> alert('Lo sentimos, debes iniciar sesion ');
    location.href = '../index.html';</script>";
  }else{
  
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  
	<link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/custom-responsive-style.css">
  	<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
	<title>InterfazAdmin</title>
</head>
<body>

  
 
  
 <!-- panel de administrador-->
	<section id="Gain">
    <div class="container">
      <div class="title text-center">
        <h3>Panel de administrador</h3>
        <p>Este es tu espacio como administrador, tendras control de cada asesor y podras registrar mas.Tendras control en tiempo real de cada sala de chat, con la imformacion de el asesor encargado y el usuario actual.Podras ver la lista de todos los visitantes que se registren en CHAT-SERVICE.</p>
      </div>
  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
          <div class="each-icon box-1">
            <div class="icon-wrap">
              <i class="fa fa-cogs"></i>
            </div>
            <div class="icon-text">
              <h3>Registro y control de asesores</h3>
              <p>Aqui puedes registrar y controlar la informacion de cada asesor.</p>
              <div class="cta">
                <a title="Read More" href="registro y control de asesores/index.php"><i class="fa fa-arrow-right" aria-hidden="true" ></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
          <div class="each-icon box-2">
            <div class="icon-wrap">
              <i class="fa fa-chart-pie"></i>
            </div>
            <div class="icon-text">
              <h3>Control de chats</h3>
              <p>Aqui podras ver y controlar en tiempo real lo que esta sucediendo en cada sala de chat..</p>
              <div class="cta">
                <a title="Read More" href="reportes y estados de chat/index.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
          <div class="each-icon box-2">
            <div class="icon-wrap">
              <i class="fa fa-chart-pie"></i>
            </div>
            <div class="icon-text">
              <h3>Lista de usuarios</h3>
              <p>Aqui podras ver la lista de todos los usuarios registrados en CHAT-SERVICE, tambien pudes exportar la informacion en formato pdf.</p>
              <div class="cta">
                <a title="Read More" href="Lista de usuarios/index.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      
      
  </section>



<footer id="Footer">
    <div class="container text-center">
      <div class="footer-text ">
        <h3 class="text-white">Cerrar Sesion</h3><a title="Read More" href="cerrar Sesion/cerrarSesion.php"><i class="fa fa-arrow-right" aria-hidden="true" ></i></a>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="copy-right">
              <p>© Santiago Murcai - Carlos Gonzales, Inc.</p>
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
            <p class="designed">Interfaz de administrador  
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