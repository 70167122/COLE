<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	
	$id= $_POST['id'];
	
	

	$query = $conexion->prepare(" DELETE FROM cursos_grados WHERE id=:id");
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/cursos_grado");







 ?>