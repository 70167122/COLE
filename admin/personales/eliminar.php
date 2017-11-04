<?php 
date_default_timezone_set('America/Lima');
    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	
	$id= $_POST['id'];
	$fecha = date("Y-m-d H:i:s");
	
	

	$query = $conexion->prepare("UPDATE personales SET deleted_at = :eliminar WHERE id=:id");
	$query->bindParam(':id',$id);
	$query->bindParam(':eliminar',$fecha);
	$query->execute();

	header("Location: ".RUTA."admin/personales");







 ?>