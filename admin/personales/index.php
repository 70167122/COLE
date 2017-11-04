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




//$pagination = new PDO_Pagination($connection);

$consulta=$conexion->prepare("SELECT * FROM especialidades");
$consulta->execute();
$especialidad=$consulta->fetchAll();


$consulta=$conexion->prepare("SELECT * FROM tipos_personal");
$consulta->execute();
$tipo=$consulta->fetchAll();



$consulta=$conexion->prepare("SELECT * FROM categorias");
$consulta->execute();
$categoria=$consulta->fetchAll();





//consulta para mostrar usuarios
$consulta5=$conexion->prepare("SELECT personales.id,personales.nombre,personales.apellido,personales.telefono,personales.correo_electronico,personales.deleted_at,especialidades.descripcione,personales.tiempo_servicio,personales.nivel,tipos_personal.descripciont,categorias.descripcion,personales.especialidad_id,personales.tipopersonal_id,personales.categoria_id FROM personales INNER JOIN especialidades on personales.especialidad_id=especialidades.id INNER JOIN categorias on personales.categoria_id=categorias.id INNER JOIN tipos_personal on personales.tipopersonal_id=tipos_personal.id WHERE personales.deleted_at IS NULL");
$consulta5->execute();
$personal=$consulta5->fetchAll();



require('../../views/personales/index.view.php');

