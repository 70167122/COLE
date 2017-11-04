<?php 


 	require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$alumno = $_POST['alumno'];
	$direccion = $_POST['direccion'];
	$mensaje = $_POST['mensaje'];


	$query = $conexion->prepare("INSERT INTO mensaje (nombre,correo,telefono,alumno,direccion,mensaje) VALUES(:nom,:cor,:tel,:alu,:dir,:men)");
	$query->bindParam(':nom',$nombre);
	$query->bindParam(':cor',$correo);
	$query->bindParam(':tel',$telefono);
	$query->bindParam(':alu',$alumno);
	$query->bindParam(':dir',$direccion);
	$query->bindParam(':men',$mensaje);
	
	
	$query->execute();


 ?>