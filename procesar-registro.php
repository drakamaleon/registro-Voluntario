<?php
	$nombre = $_POST["inputNombre"];
	$ciud = $_POST["ciudad"];
	$telf = $_POST["inputTelefono"];
	$edad = $_POST["inputEdad"];

	if(!($conn = mysqli_connect("localhost", "root", ""))){ 
    die("Error: No se pudo conectar");}
    if(!$db = mysql_select_db("$voluntarios", $conn) ){
    	die("Error: No se pudo conectar");}
    
    $_GRABAR_SQL = "INSERT INTO voluntarios (Nombre,Ciudad,Telefono,Edad) VALUES ('$nombre','$ciud','$telf','$edad')";
    mysql_query($_GRABAR_SQL); 

    mysql_close($conn);

?>