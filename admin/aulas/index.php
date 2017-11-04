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



$consulta=$conexion->prepare("SELECT * FROM tipos_aula");
$consulta->execute();
$tipo=$consulta->fetchAll();

//consulta para mostrar usuarios
$consulta5=$conexion->prepare("SELECT aulas.id,aulas.descripcionc,tipos_aula.descripcion,aulas.tipoaula_id FROM aulas INNER JOIN tipos_aula on aulas.tipoaula_id=tipos_aula.id  ");
$consulta5->execute();
$aula=$consulta5->fetchAll();

require('../../views/aulas/index.view.php');

