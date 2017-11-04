<?php 


 require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['descripcion'];
	$Lectivo = $_POST['lectivo'];
	$Fecha_inicio = $_POST['fecha_inicio'];
	$Fecha_final = $_POST['fecha_final'];





	$query = $conexion->prepare("INSERT INTO anios_academico (descripcion,lectivo,fecha_inicio,fecha_final) VALUES(:descripcion,:lectivo,:fecha_inicio,:fecha_final)");

	$query->bindParam(':descripcion',$Descripcion);
	$query->bindParam(':lectivo',$Lectivo);
	$query->bindParam(':fecha_inicio',$Fecha_inicio);
	$query->bindParam(':fecha_final',$Fecha_final);

	
	
	$query->execute();

	header("Location: ".RUTA."admin/anios_academico");



 ?>