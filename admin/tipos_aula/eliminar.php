<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	
	$id= $_POST['id'];
	
	

	$query = $conexion->prepare(" DELETE FROM tipos_aula WHERE id=:id");
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/tipos_aula");







 ?>