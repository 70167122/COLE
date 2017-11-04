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

$sql = $conexion->prepare("SELECT * FROM perfiles");
$sql -> execute();

$perfiles = $sql -> fetchAll();


$pagination = new PDO_Pagination($connection);
require('../../views/restricciones/index.view.php');

