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

	$id= $_POST['id'];
	$fecha = date("Y-m-d H:i:s");
	

	$query = $conexion->prepare(" UPDATE personales SET nombre=:Nombre,apellido=:Apellido, telefono=:Telefono,correo_electronico=:Correo ,especialidad_id=:Especialidad,tiempo_servicio=:Tiempo,nivel=:Nivel,tipopersonal_id=:Tipo,categoria_id=:Categoria,updated_at=:updated WHERE id=:id");
	$query->bindParam(':Nombre',$Nombre);
	$query->bindParam(':Apellido',$Apellido);
	$query->bindParam(':Telefono',$Telefono);
	$query->bindParam(':Correo',$Correo);
	$query->bindParam(':Especialidad',$Especialidad);
	$query->bindParam(':Tiempo',$Tiempo);
	$query->bindParam(':Nivel',$Nivel);
	$query->bindParam(':Tipo',$Tipo);
	$query->bindParam(':Categoria',$Categoria);
	$query->bindParam(':updated',$fecha);
	$query->bindParam(':id',$id);

	$query->execute();

	header("Location: ".RUTA."admin/personales");







 ?>