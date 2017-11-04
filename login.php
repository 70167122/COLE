<?php 

	session_start();

	require 'config/conexion.php';
	require 'config/config.php';

	$conexion = conectar();

		if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
			
			$usuario = $_POST['username'];
			$password = $_POST['password'];

			$consulta = $conexion->prepare("SELECT
			usuarios_perfiles.usuario_id,
			usuarios_perfiles.perfil_id,
			personales.nombre,
			personales.apellido,
			usuarios.usuario,
			usuarios.`password`
			FROM
			usuarios_perfiles
			INNER JOIN usuarios ON usuarios_perfiles.usuario_id = usuarios.id
			INNER JOIN perfiles ON usuarios_perfiles.perfil_id = perfiles.id
			INNER JOIN personales ON usuarios.personal_id = personales.id
			WHERE usuario = :usuario AND password = :password");
			$consulta -> execute(array(":usuario"=>$usuario,":password"=>$password));

			$resultado = $consulta->fetch();

			if ($resultado != false) {
				$_SESSION['perfil_id'] = $resultado['perfil_id'];
				$_SESSION['usuario'] = $resultado['usuario'];
				$_SESSION['nombre'] = $resultado['nombre'];
				$_SESSION['apellido'] = $resultado['apellido'];
				header("location: ".RUTA."admin");
			}else{
				
				header("location: ".RUTA."ingresar.php");
			}
		} 

 ?>