<?php 
	
	require '../config/conexion.php';
	require '../config/config.php';

	$conexion = conectar();

	$padre = $_POST['padre'];

	$hijo = $_POST['hijo'];

	$perfil = $_POST['perfil'];

	$permiso = 1;

	$creado = date("Y-m-d H:i:s");

	$consulta = $conexion -> prepare("INSERT INTO restricciones_perfiles (perfil_id,restriccion_id,modulo_id,created_at) VALUES (:perfil,:restriccion,:modulo,:creado)");
	$consulta -> execute(array(
		":perfil" => $perfil,
		":restriccion" => $permiso,
		":modulo" => $hijo,
		":creado" => $creado
	));

 ?>