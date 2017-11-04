<?php 


 require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcione = $_POST['descripcione'];

	$query = $conexion->prepare("INSERT INTO especialidades (descripcione) VALUES(:descripcione)");
	$query->bindParam(':descripcione',$Descripcione);
	
	
	$query->execute();

	header("Location: ".RUTA."admin/especialidades");

 ?>