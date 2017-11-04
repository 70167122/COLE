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



$consulta=$conexion->prepare("SELECT * FROM cursos");
$consulta->execute();
$cursos=$consulta->fetchAll();


$consulta=$conexion->prepare("SELECT * FROM grados");
$consulta->execute();
$grados=$consulta->fetchAll();











//consulta para mostrar usuarios
$consulta5=$conexion->prepare("SELECT cursos_grados.id,cursos.descripcion,grados.descripciong,cursos_grados.curso_id,cursos_grados.grado_id,cursos_grados.deleted_at FROM cursos_grados INNER JOIN cursos on cursos_grados.curso_id=cursos.id INNER JOIN grados on cursos_grados.grado_id=grados.id ");
$consulta5->execute();
$cursos_grado=$consulta5->fetchAll();

require('../../views/cursos_grado/index.view.php');

