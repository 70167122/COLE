<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['Descripcion'];
	
	
	$id= $_POST['id'];
	

	$query = $conexion->prepare(" UPDATE categorias SET descripcion=:Descripcion WHERE id=:id");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/categorias");







 ?>