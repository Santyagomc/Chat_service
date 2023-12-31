<?php
	session_start();
	$sala = $_POST['sala'];

	if ($sala == "sala1") {
		echo "<script> alert('Seras direccionado a la sala 1 ');
        location.href = '../../../salasChat/chat/chatPrin.php';</script>";
    
	}elseif ($sala == "sala2") {
		echo "<script> alert('Seras direccionado a la sala 2 ');
        location.href = '../../../salasChat/chatNO2/chatPrin.php';</script>";
	}elseif ($sala == "sala3") {
		echo "<script> alert('Seras direccionado a la sala 3 ');
        location.href = '../../../salasChat/chatNO3/chatPrin.php';</script>";
	}
	


?>