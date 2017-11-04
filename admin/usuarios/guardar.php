<?php 

date_default_timezone_set('America/Lima');
    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Personal = $_POST['Personal'];
	$Usuario=$_POST['Usuario'];
	$Password=$_POST['Password'];
	$RPassword=$_POST['RPassword'];
$fecha = date("Y-m-d H:i:s");


	$query = $conexion->prepare("INSERT INTO usuarios(personal_id,usuario,password,recordar_password,created_at) VALUES(:Personal,:Usuario,:Password,:RPassword,:created)");
	$query->bindParam(':Personal',$Personal);
	$query->bindParam(':Usuario',$Usuario);
	$query->bindParam(':Password',$Password);
	$query->bindParam(':RPassword',$RPassword);
	$query->bindParam(':created',$fecha);
	$query->execute();

	header("Location: ".RUTA."admin/usuarios");

 ?>