<?php 


 require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['descripcion'];





	$query = $conexion->prepare("INSERT INTO niveles_de_estudio (descripcion) VALUES(:descripcion)");
	$query->bindParam(':descripcion',$Descripcion);
	
	
	$query->execute();

	header("Location: ".RUTA."admin/niveles_de_estudio ");



 ?>