<?php 


 require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['descripcion'];





	$query = $conexion->prepare("INSERT INTO tipos_aula (descripcion) VALUES(:descripcion)");
	$query->bindParam(':descripcion',$Descripcion);
	
	
	$query->execute();

	header("Location: ".RUTA."admin/tipos_aula");



 ?>