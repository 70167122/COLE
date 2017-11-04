<?php 


    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['Descripcion'];
	$Grado=$_POST['Grado'];



	$query = $conexion->prepare("INSERT INTO secciones(descripcion,grado_id) VALUES(:Descripcion,:Grado)");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Grado',$Grado);
	
	$query->execute();

	header("Location: ".RUTA."admin/secciones");

 ?>