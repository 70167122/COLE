<?php 


    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['Descripcion'];
   $Tipopersonal = $_POST['Tipopersonal'];


	$query = $conexion->prepare("INSERT INTO perfiles(descripcionp,tipopersonal_id) VALUES(:Descripcion,:Tipopersonal)");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Tipopersonal',$Tipopersonal);
	
	$query->execute();

	header("Location: ".RUTA."admin/perfiles");

 ?>