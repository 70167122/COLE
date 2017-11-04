<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	
	$Descripcion = $_POST['Descripcion'];
	$Nivel=$_POST['Nivel'];
	$id= $_POST['id'];
	

	$query = $conexion->prepare(" UPDATE grados SET descripciong=:Descripcion,nivelestudio_id=:Nivel WHERE id=:id");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Nivel',$Nivel);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/grados");







 ?>