<?php require("../../../../conexion/db.php")?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<title>Chat#1</title>
  
</head>
<body >
	<div class="container-fluid" id="tabla">

  
  <h2 class="text-center">Estados de chats</h2> 
      <table class="table" id="Paginacion">
        <thead class="thead-dark"> 
        <tr>
      <th scope="col">id mensaje</th>
      <th scope="col">Mensaje</th>
      <th scope="col">Sala de chat</th>
      <th scope="col">Usuario</th>
      <th scope="col">Asesor</th>
      <th scope="col">Fecha</th>
      
    </tr>
    </thead>
    
    
    <?php 

        $consulta= "SELECT numeroMensajes,mensaje,fecha,salaChat,idUser,nombre from chat,usuarios WHERE tipoUsuario = 'Asesor' and salaChat = 3";
        $sql = mysqli_query($conexion,$consulta);

        if( mysqli_num_rows($sql) > 0 ){
    
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($sql)) {
                
                echo  "<tr>"."<td>".$row['numeroMensajes']."</td>"."<td>".$row['mensaje']."</td>"."<td>".$row['salaChat']."</td>"."<td>".$row['idUser']."</td>"."<td>".$row['nombre']."</td>"."<td>".$row['fecha']."</td>"."</tr>"; 
                
            }
            echo "</tbody>";
           
            
        }else{
            echo "No hay ningun resultado";
        }
        
        mysqli_close($conexion);
    
    ?>
    </table>

	</div>
</body>
</html>