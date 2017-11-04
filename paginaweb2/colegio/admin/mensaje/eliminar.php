<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	
	$id= $_POST['idmsj'];
	
	

	$query = $conexion->prepare(" UPDATE mensaje SET estado='I' WHERE id=:id");
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/mensaje");







 ?>