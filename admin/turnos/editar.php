<?php 
date_default_timezone_set('America/Lima');
    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Descripcion = $_POST['Descripcion'];
	$Hora_entrada = $_POST['Hora_entrada'];
	$Hora_salida = $_POST['Hora_salida'];
	$id= $_POST['id'];
	$fecha = date("Y-m-d H:i:s");

	$query = $conexion->prepare(" UPDATE turnos SET descripcion=:Descripcion,hora_entrada=:Hora_entrada,hora_salida=:Hora_salida,updated_at=:updated WHERE id=:id");
	$query->bindParam(':Descripcion',$Descripcion);
	$query->bindParam(':Hora_entrada',$Hora_entrada);
	$query->bindParam(':Hora_salida',$Hora_salida);
		$query->bindParam(':updated',$fecha);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/turnos");


 ?>