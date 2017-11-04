<?php 


    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Nombre = $_POST['Nombre'];
	$Apellido=$_POST['Apellido'];
	$Telefono = $_POST['Telefono'];
	$Correo=$_POST['Correo'];
	$Especialidad = $_POST['Especialidad'];
	$Tiempo=$_POST['Tiempo'];
	$Nivel = $_POST['Nivel'];
	$Categoria=$_POST['Categoria'];



	$query = $conexion->prepare("INSERT INTO personales(nombre,apellido,telefono,correo_electronico,especialidad_id,tiempo_servicio,nivel,categoria_id) VALUES(:Nombre,:Apellido,:Telefono,:Correo,:Especialidad,:Tiempo,:Nivel,:Categoria)");
	$query->bindParam(':Nombre',$Nombre);
	$query->bindParam(':Apellido',$Apellido);
	$query->bindParam(':Telefono',$Telefono);
	$query->bindParam(':Correo',$Correo);
	$query->bindParam(':Especialidad',$Especialidad);
	$query->bindParam(':Tiempo',$Tiempo);
	$query->bindParam(':Nivel',$Nivel);
	$query->bindParam(':Categoria',$Categoria);
	
	$query->execute();

	header("Location: ".RUTA."admin/personales");

 ?>