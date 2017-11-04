<?php 


    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['Descripcion'];
	$Nivel=$_POST['Nivel'];



	$query = $conexion->prepare("INSERT INTO grados(descripciong,nivelestudio_id) VALUES(:Descripcion,:Nivel)");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Nivel',$Nivel);
	
	$query->execute();

	header("Location: ".RUTA."admin/grados");

 ?>