<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcione = $_POST['descripcione'];
	
	
	$id= $_POST['id'];
	

	$query = $conexion->prepare(" UPDATE especialidades SET descripcione=:descripcione WHERE id=:id");
	$query->bindParam(':descripcione',$Descripcione);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/especialidades");


 ?>