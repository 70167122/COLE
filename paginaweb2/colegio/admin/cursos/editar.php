<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	
	$Descripcion = $_POST['Descripcion'];
	$Especialidad=$_POST['Especialidad'];
	$id= $_POST['id'];
	

	$query = $conexion->prepare(" UPDATE cursos SET descripcionc=:Descripcion,especialidad_id=:Especialidad WHERE id=:id");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Especialidad',$Especialidad);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/cursos");







 ?>