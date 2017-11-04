<?php 

session_start();
require('../../config/conexion.php');
require('../../config/config.php');

if (!isset($_SESSION['usuario'])) {
	header("location: ".RUTA."ingresar.php");
}

require ("../../PDO_Pagination.php");


$conexion = conectar();
	$consulta= $conexion -> prepare("SELECT COUNT(*) FROM mensaje WHERE estado ='A'");
		$consulta ->execute();
		$cantidad_mensaje=$consulta -> fetch();

require('../../header.php');




$pagination = new PDO_Pagination($connection);


$consulta=$conexion->prepare("SELECT * FROM personales");
$consulta->execute();
$personal=$consulta->fetchAll();

//consulta para mostrar usuarios
$consulta5=$conexion->prepare("SELECT usuarios.id,personales.nombre,usuarios.usuario,usuarios.deleted_at,usuarios.password,usuarios.recordar_password,usuarios.personal_id FROM usuarios INNER JOIN personales on usuarios.personal_id=personales.id WHERE usuarios.deleted_at IS NULL");
$consulta5->execute();
$usuario=$consulta5->fetchAll();

require('../../views/usuarios/index.view.php');

