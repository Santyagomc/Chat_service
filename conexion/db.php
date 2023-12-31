<?php

$servidor = "localhost";
$usuario = "root";
$pass = "";
$db = "chat";

$conexion = mysqli_connect($servidor,$usuario,$pass,$db) ;


function formatearFecha($fecha){    
    return date("g:i a" , strtotime($fecha));
}
