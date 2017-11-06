<?php 

	require '../config/conexion.php';
	require '../config/config.php';

	$conexion = conectar();

	$padre = $_POST['padre'];

	$hijo = $_POST['hijo'];

	$perfil = $_POST['perfil'];

	$creado = date("Y-m-d H:i:s");

	$consulta = $conexion -> prepare("DELETE FROM restricciones_perfiles WHERE perfil_id = :perfil AND modulo_id = :modulo");
	$consulta -> execute(array(
		":perfil" => $perfil,
		":modulo" => $hijo
	));

 ?>