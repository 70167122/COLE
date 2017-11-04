<?php 

	date_default_timezone_set('America/Lima');

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Nombre = $_POST['Nombre'];
	$Apellido=$_POST['Apellido'];
	$Telefono=$_POST['Telefono'];
	$Correo=$_POST['Correo'];
	$Especialidad = $_POST['Especialidad'];
	$Tiempo=$_POST['Tiempo'];
	$Nivel=$_POST['Nivel'];
	$Tipo=$_POST['Tipo'];
	$Categoria=$_POST['Categoria'];

	$fecha = date("Y-m-d H:i:s");


	$query = $conexion->prepare("INSERT INTO personales(nombre,apellido,telefono,correo_electronico,especialidad_id,tiempo_servicio,nivel,tipopersonal_id,categoria_id,created_at) VALUES(:Nombre,:Apellido,:Telefono,:Correo,:Especialidad,:Tiempo,:Nivel,:Tipo,:Categoria,:created)");
	$query->bindParam(':Nombre',$Nombre);
	$query->bindParam(':Apellido',$Apellido);
	$query->bindParam(':Telefono',$Telefono);
	$query->bindParam(':Correo',$Correo);
	$query->bindParam(':Especialidad',$Especialidad);
	$query->bindParam(':Tiempo',$Tiempo);
	$query->bindParam(':Nivel',$Nivel);
	$query->bindParam(':Tipo',$Tipo);
	$query->bindParam(':Categoria',$Categoria);
	$query->bindParam(':created',$fecha);
	
	$query->execute();

	header("Location: ".RUTA."admin/personales");

 ?>