<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	
   $Descripcion = $_POST['Descripcion'];
   $Tipopersonal = $_POST['Tipopersonal'];
	$id= $_POST['id'];
	

	$query = $conexion->prepare(" UPDATE perfiles SET descripcionp=:Descripcion,tipopersonal_id=:Tipopersonal WHERE id=:id");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Tipopersonal',$Tipopersonal);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/perfiles");







 ?>