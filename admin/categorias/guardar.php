<?php 


 require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['Descripcion'];





	$query = $conexion->prepare("INSERT INTO categorias (descripcion) VALUES(:Descripcion)");
	$query->bindParam(':Descripcion',$Descripcion);
	
	
	$query->execute();

	header("Location: ".RUTA."admin/categorias");



 ?>