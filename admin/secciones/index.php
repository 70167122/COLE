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



$consulta=$conexion->prepare("SELECT * FROM grados");
$consulta->execute();
$grado=$consulta->fetchAll();

//consulta para mostrar usuarios
$consulta5=$conexion->prepare("SELECT secciones.id,secciones.descripcion,grados.descripciong,secciones.grado_id FROM secciones INNER JOIN grados on secciones.grado_id=grados.id ");
$consulta5->execute();
$seccion=$consulta5->fetchAll();

require('../../views/secciones/index.view.php');

