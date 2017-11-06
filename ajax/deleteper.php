<?php 

	require '../config/conexion.php';
	require '../config/config.php';

	$conexion = conectar();


	$hijo = $_POST['modulo'];

	$perfil = $_POST['perfil'];

	$permiso = $_POST['num'];

	$creado = date("Y-m-d H:i:s");

	$consulta = $conexion -> prepare("DELETE FROM restricciones_perfiles WHERE perfil_id = :perfil AND modulo_id = :modulo AND restriccion_id = :permiso");
	$consulta -> execute(array(
		":perfil" => $perfil,
		":modulo" => $hijo,
		":permiso" => $permiso
	));

 ?>