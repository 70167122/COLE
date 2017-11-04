<?php 
date_default_timezone_set('America/Lima');
    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Personal = $_POST['Personal'];
	$Usuario=$_POST['Usuario'];
	$Password=$_POST['Password'];
	$RPassword=$_POST['RPassword'];
	$id= $_POST['id'];
	$fecha = date("Y-m-d H:i:s");
	

	$query = $conexion->prepare(" UPDATE usuarios SET personal_id=:Personal,usuario=:Usuario, password=:Password,recordar_password=:RPassword,updated_at=:updated  WHERE id=:id");
	$query->bindParam(':Personal',$Personal);
	$query->bindParam(':Usuario',$Usuario);
	$query->bindParam(':Password',$Password);
	$query->bindParam(':RPassword',$RPassword);
	$query->bindParam(':updated',$fecha);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/usuarios");







 ?>