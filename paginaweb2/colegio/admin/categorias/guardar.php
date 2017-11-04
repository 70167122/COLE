<?php 


 require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['descripcion'];





	$query = $conexion->prepare("INSERT INTO categorias (descripcion) VALUES(:descripcion)");
	$query->bindParam(':descripcion',$Descripcion);
	
	
	$query->execute();

	header("Location: ".RUTA."admin/categorias");



 ?>