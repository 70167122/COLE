<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['Descripcion'];
	$Hora_entrada = $_POST['Hora_entrada'];
	$Hora_salida = $_POST['Hora_salida'];
	$id= $_POST['id'];
	

	$query = $conexion->prepare(" UPDATE turnos SET descripcion=:Descripcion,hora_entrada=:Hora_entrada,hora_salida=:Hora_salida WHERE id=:id");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Hora_entrada',$Hora_entrada);
	$query->bindParam(':Hora_salida',$Hora_salida);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/turnos");


 ?>