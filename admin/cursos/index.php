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




$consulta=$conexion->prepare("SELECT * FROM especialidades");
$consulta->execute();
$especialidad=$consulta->fetchAll();

//consulta para mostrar usuarios
$consulta5=$conexion->prepare("SELECT cursos.id,cursos.descripcion,especialidades.descripcione,cursos.especialidad_id FROM cursos INNER JOIN especialidades on cursos.especialidad_id=especialidades.id  ");
$consulta5->execute();
$curso=$consulta5->fetchAll();

require('../../views/cursos/index.view.php');

