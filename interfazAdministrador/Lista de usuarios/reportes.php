<?php 
	require("../../librerias/fpdf/fpdf.php");	
	include "../../conexion/db.php";

	class PDF extends FPDF
{
// Cabecera de página
	function Header()
{
    // Logo
    $this->Image('../../images/logo2.png',15,10,40);
    // Fuente
    $this->SetFont('Arial','B',23);
    // Mover a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(45,8,'LISTA DE USUARIOS');
    $this->Ln();
    $this->Cell(143,8,'(Visitantes)',0,2,'R');

    // Salto de línea
    $this->Ln(45);
}
}
$pdf = new PDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','',8);

	$consulta= "SELECT * FROM usuarios where tipoUsuario = 'Visitante'";
    $sql = mysqli_query($conexion,$consulta);
    		$pdf ->Cell(32,7, "ID",1,0,'C',0);
    		$pdf ->Cell(32,7, "NOMBRE",1,0,'C',0);
       		$pdf ->Cell(32,7, "APELLIDO",1,0,'C',0);
        	$pdf ->Cell(32,7, "CORREO",1,0,'C',0);
         	$pdf ->Cell(32,7, "N.USUARIO",1,0,'C',0);
          	$pdf ->Cell(32,7, "TIPO DE USUARIO",1,1,'C',0);
        if( mysqli_num_rows($sql) > 0 ){
    
            while ($row = mysqli_fetch_assoc($sql)) {
                
                $pdf ->Cell(32,7, $row['id'],1,0,'C',0);
            	$pdf ->Cell(32,7, $row['nombre'],1,0,'C',0);
            	$pdf ->Cell(32,7, $row['apellido'],1,0,'C',0);
            	$pdf ->Cell(32,7, $row['correo'],1,0,'C',0);
            	$pdf ->Cell(32,7, $row['nombreUsuario'],1,0,'C',0);
            	$pdf ->Cell(32,7, $row['tipoUsuario'],1,1,'C',0);

                
            }
            
           $pdf->Output();
            
        }else{
            echo "No hay ningun resultado";
        }
        
        mysqli_close($conexion);







	


?>