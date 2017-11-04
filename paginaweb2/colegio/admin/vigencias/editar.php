<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	
	$Personal = $_POST['Personal'];
	$Fecha_Entrada=$_POST['Fecha_Entrada'];
	$Fecha_Salida=$_POST['Fecha_Salida'];
	$id= $_POST['id'];
	

	$query = $conexion->prepare(" UPDATE cursos SET personal_id=:Personal,fecha_entrada=:Fecha_Entrada,fecha_salida=:Fecha_Salida WHERE id=:id");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Especialidad',$Especialidad);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/vigencias");







 ?>