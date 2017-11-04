<?php 


    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['Descripcion'];
	$Tipo=$_POST['Tipo'];



	$query = $conexion->prepare("INSERT INTO aulas(descripcionc,tipoaula_id) VALUES(:Descripcion,:Tipo)");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Tipo',$Tipo);
	
	$query->execute();

	header("Location: ".RUTA."admin/aulas");

 ?>