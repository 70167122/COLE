<?php 
	session_start();
	require '../../config/conexion.php';
	require '../../config/config.php';
	


	$conexion = conectar();

	$consulta = $conexion -> prepare("SELECT * FROM personales WHERE deleted_at IS NULL");
	$consulta -> execute();

	$personales = $consulta -> fetchAll();

	$query= $conexion -> prepare("SELECT COUNT(*) FROM mensaje WHERE estado ='A'");
		$query ->execute();
		$cantidad_mensaje=$query -> fetch();

		require '../../header.php';

	require '../../views/porpersonales/index.view.php';

 ?>