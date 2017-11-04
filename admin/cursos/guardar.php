<?php 


    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['Descripcion'];
	$Especialidad=$_POST['Especialidad'];



	$query = $conexion->prepare("INSERT INTO cursos(descripcion,especialidad_id) VALUES(:Descripcion,:Especialidad)");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Especialidad',$Especialidad);
	
	$query->execute();

	header("Location: ".RUTA."admin/cursos");

 ?>