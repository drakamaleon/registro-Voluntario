<?php
	$nombre = $_POST["inputNombre"];
	$ciud = $_POST["ciudad"];
	$telf = $_POST["inputTelefono"];
	$edad = $_POST["inputEdad"];

	$hotsdb = "localhost";    // sera el valor de nuestra BD
    $basededatos = "voluntarios";    // sera el valor de nuestra BD

    $usuariodb = "root";    // sera el valor de nuestra BD
    $clavedb = "";    // sera el valor de nuestra BD

    $tabla_db1 = "voluntarios";    // sera el valor de una tabla
    $tabla_db2 = "otratabla";    // sera el valor de otra tabla

// Fin de los parametros a configurar para la conexion de la base de datos

    $conexion_db = mysql_connect("$hotsdb","$usuariodb","$clavedb")
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");
    $db = mysql_select_db("$basededatos", $conexion_db)
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE");
    $_GRABAR_SQL = "INSERT INTO voluntarios (nombre,ciudad,telefono,edad) VALUES ('$nombre','$ciud','$telf','$edad')";
    mysql_query($_GRABAR_SQL); 

    mysql_close($conexion_db);

    header("location: home.php");
?>