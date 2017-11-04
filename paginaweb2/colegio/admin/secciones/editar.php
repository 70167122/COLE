<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

    $Descripcion = $_POST['Descripcion'];
	$Grado=$_POST['Grado'];

	$id= $_POST['id'];
	

	$query = $conexion->prepare(" UPDATE secciones SET descripcionc=:Descripcion,grado_id=:Grado WHERE id=:id");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Grado',$Grado);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/secciones");







 ?>