<?php 

	session_start();

	require 'config/conexion.php';
	require 'config/config.php';


	if (isset($_SESSION['login'])) {
		header("location: ".RUTA."admin");
	}else{

		if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

			$conexion= new PDO("mysql:host=localhost;dbname=desarrollo","root","");
			$usuario = $_POST['username'];
			$password = $_POST['password'];

			$consulta = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password");
			$consulta->execute(array(":usuario"=>$usuario,":password"=>$password));

			$resultado = $consulta->fetch();


			if (count($resultado)>1) {
				$_SESSION['login'] = 'listo';
				header("location: ".RUTA."admin");
			}else{
				$_SESSION['login'] = 'falso';
			}
		} 
			
	}

	

	require 'ingresar.php';

 ?>