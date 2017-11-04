<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

    $Descripcion = $_POST['Descripcion'];
	$Tipo=$_POST['Tipo'];

	$id= $_POST['id'];
	

	$query = $conexion->prepare(" UPDATE aulas SET descripcionc=:Descripcion,tipoaula_id=:Tipo WHERE id=:id");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Tipo',$Tipo);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/aulas");







 ?>