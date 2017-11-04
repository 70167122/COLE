<?php 
	session_start();
	require('../config/config.php');
	require '../config/conexion.php';

	$conexion = conectar();


	if (!isset($_SESSION['login'])) {
		header("location: ".RUTA."ingresar.php");
	}else{

		$consulta = $conexion -> prepare("SELECT COUNT(*) FROM `mensaje` WHERE estado = 'A'");
		$consulta -> execute();

		$cantidad_mensajes = $consulta -> fetch();

		require('../header.php');
		require('../views/index.view.php');
		require('../footer.php');
	}


?>