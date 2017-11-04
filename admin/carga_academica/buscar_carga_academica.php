<?php 
	session_start();
	require('../../config/conexion.php');
	require('../../config/config.php');

	if (!isset($_SESSION['usuario'])) {
		header("location: ".RUTA."ingresar.php");
	}

	$conexion = conectar();

	$searchTerm  =  $_GET['term']; 

	$consulta = $conexion -> prepare("SELECT
	personales.nombre,
	personales.apellido,
	tipos_personal.descripciont
	FROM
	personales
	INNER JOIN tipos_personal ON personales.tipopersonal_id = tipos_personal.id WHERE personales.nombre LIKE '%".$searchTerm."%'");

	$consulta -> execute();

	$personal = $consulta -> fetchAll();


	foreach ($personal as $key => $value) {
		$data[] = $value['nombre'];
	}

	echo json_encode($data);

 ?>