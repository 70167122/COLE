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
	$id= $_POST['id'];
	



	$query = $conexion->prepare(" UPDATE personales SET nombre=:Nombre,apellido=:Apellido,telefono=:Telefono,correo_electronico=:Correo,especialidad_id=:Especialidad,tiempo_servicio=:Tiempo,nivel=:Nivel,categoria_id=:Categoria WHERE id=:id");
	$query->bindParam(':Nombre',$Nombre);
	$query->bindParam(':Apellido',$Apellido);
	$query->bindParam(':Telefono',$Telefono);
	$query->bindParam(':Correo',$Correo);
	$query->bindParam(':Especialidad',$Especialidad);
	$query->bindParam(':Tiempo',$Tiempo);
	$query->bindParam(':Nivel',$Nivel);
	$query->bindParam(':Categoria',$Categoria);
	$query->bindParam(':id',$id);
	
	$query->execute();

	header("Location: ".RUTA."admin/personales");

 ?>