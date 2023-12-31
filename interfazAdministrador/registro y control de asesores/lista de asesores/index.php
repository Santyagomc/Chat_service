<?php require("../../../conexion/db.php");
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
    <link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
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
    
    <title>Lista de asesores</title>
</head>
<body>
      <h2 class="text-center">Lista de asesores</h2> 
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
      <th scope="col">Editar</th>
    </tr>
    </thead>
    
    
    <?php 

        $consulta= "SELECT * FROM usuarios where tipoUsuario = 'Asesor'";
        $sql = mysqli_query($conexion,$consulta);

        if( mysqli_num_rows($sql) > 0 ){
    
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($sql)) {
                
                echo  "<tr>"."<td>".$row['id']."</td>"."<td>".$row['nombre']."</td>"."<td>".$row['apellido']."</td>"."<td>".$row['correo']."</td>"."<td>".$row['nombreUsuario']."</td>"."<td>".$row['tipoUsuario']."</td>"."<td><button type='button' class='btn btn-outline-primary' data-toggle='modal' data-target='#staticBackdrop'>
                Modificar
              </button><button type='button' class='btn btn-outline-danger' data-toggle='modal' data-target='#exampleModal'>
              Eliminar
            </button></td>"."</tr>"; 
                
            }
            echo "</tbody>";
           
            
        }else{
            echo "No hay ningun resultado";
        }
        
        mysqli_close($conexion);
    
    ?>
    </table>
    </div>

    <!-- ventana emergente modificar-->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modificar informacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="crud/update/update.php" method="post">

					<div class="wrap-input100 validate-input" data-validate = "Debes ingresar el nombre">
						<input class="input100" type="text"  name="nombre" >
						<span class="focus-input100"></span>
						<span class="label-input100">Nombre</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Debes ingresar el Apellido">
						<input class="input100" type="text"  name="apellido" >
						<span class="focus-input100"></span>
						<span class="label-input100">Apellido</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Debes ingresar el Correo electronico">
						<input class="input100" type="text"  name="correo" >
						<span class="focus-input100"></span>
						<span class="label-input100">Correo electronico</span>
					</div>



					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text"  name="nombreUsuario" >
						<span class="focus-input100"></span>
						<span class="label-input100">Nombre de usuario</span>
					</div>
          <div class="alert alert-info" role="alert">
                Debes ingresar el <strong>numero de identidad </strong>de la persona que desees modificar.
            </div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text"  name="identidad"  >
						<span class="focus-input100"></span>
						<span class="label-input100">Numero de identidad</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Debes ingresar tu rol de usuario">
					<select class="wrap-input100  input100" name="tipoUsuario" >
						   <option value=" "> </option>
                           <option value="Asesor" >Asesor</option> 
                           <option value="Administrador"  >Administrador</option>
					</select>
					 	<span class="label-input100">Tipo de usuario</span>
					</div>
	
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Modificar
						</button>
					</div>
					
				
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

<!-- ventana emergente eliminar-->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar asesor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="crud/delete/delete.php" method="post">
            <div class="wrap-input100 validate-input" data-validate = "Debes ingresar el numero de identidad">
						<input class="input100" type="text"  name="identidad" autocomplete="off" >
						<span class="focus-input100"></span>
						<span class="label-input100">Numero de identidad</span>
					</div>
            </div>

            
    

    <div class="alert alert-danger" role="alert">
            Debes ingresar el <strong> numero de identidad </strong>de la persona que deseas eliminar.
    </div>

    <div class="alert alert-danger" role="alert">
            Se borrara <strong> todo </strong>de la persona que seleccionaste eliminar.
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger">Borrar</button>
      </div>
    </form>
    </div>
  </div>
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
              searchPlaceholder: "Busca a tus asesores",
          info: "",
          infoFiltered: "Se han filtrado _MAX_ entradas",
          infoEmpty: "No se han encotrado entradas ",
          zeroRecords: "<h3>No hay asesores registrados</h3>"
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
<a  href="../../index.php" class="btn btn-outline-danger">Volver al panel</a>

</body>
</html>