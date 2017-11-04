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
$consulta5=$conexion->prepare("SELECT vigencias.id,personales.nombre,vigencias.fecha_entrada,vigencias.fecha_salida,vigencias.personal_id FROM vigencias INNER JOIN personales on vigencias.personal_id=personales.id  ");
$consulta5->execute();
$vigencias=$consulta5->fetchAll();

require('../../views/vigencias/index.view.php');

















 ?>