<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['descripcion'];
	$Lectivo= $_POST['lectivo'];
	$Fecha_inicio= $_POST['fecha_inicio'];
	$Fecha_final= $_POST['fecha_final'];
	
	
	$id= $_POST['id'];
	

	$query = $conexion->prepare(" UPDATE anios_academico SET descripcion=:descripcion,lectivo=:lectivo,fecha_inicio=:fecha_inicio,fecha_final=:fecha_final WHERE id=:id");
	$query->bindParam(':descripcion',$Descripcion);
	$query->bindParam(':lectivo',$Lectivo);
	$query->bindParam(':fecha_inicio',$Fecha_inicio);
	$query->bindParam(':fecha_final',$Fecha_final);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/anios_academico");







 ?>