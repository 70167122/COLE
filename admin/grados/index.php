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



$consulta=$conexion->prepare("SELECT * FROM niveles_de_estudio");
$consulta->execute();
$nivel=$consulta->fetchAll();

//consulta para mostrar usuarios
$consulta5=$conexion->prepare("SELECT grados.id,grados.descripciong,niveles_de_estudio.descripcion,grados.nivelestudio_id FROM grados INNER JOIN niveles_de_estudio on grados.nivelestudio_id=niveles_de_estudio.id  ");
$consulta5->execute();
$grado=$consulta5->fetchAll();

require('../../views/grados/index.view.php');

