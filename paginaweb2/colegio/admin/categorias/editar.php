<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['descripcion'];
	
	
	$id= $_POST['id'];
	

	$query = $conexion->prepare(" UPDATE categorias SET descripcion=:descripcion WHERE id=:id");
	$query->bindParam(':descripcion',$Descripcion);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/categorias");







 ?>