<?php 

	date_default_timezone_set('America/Lima');
 require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['Descripcion'];
	$Hora_entrada = $_POST['Hora_entrada'];
	$Hora_salida = $_POST['Hora_salida'];
		$fecha = date("Y-m-d H:i:s");



	$query = $conexion->prepare("INSERT INTO turnos (descripcion,hora_entrada,hora_salida,created_at) VALUES(:Descripcion,:Hora_entrada,:Hora_salida,:created)");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Hora_entrada',$Hora_entrada);
	$query->bindParam(':Hora_salida',$Hora_salida);
	$query->bindParam(':created',$fecha);
	
	$query->execute();

	header("Location: ".RUTA."admin/turnos");

 ?>