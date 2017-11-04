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



$consulta=$conexion->prepare("SELECT * FROM tipos_personal");
$consulta->execute();
$tipo=$consulta->fetchAll();

//consulta para mostrar usuarios
$consulta5=$conexion->prepare("SELECT perfiles.id,perfiles.descripcionp,tipos_personal.descripciont,perfiles.tipopersonal_id FROM perfiles INNER JOIN tipos_personal on perfiles.tipopersonal_id=tipos_personal.id  ");
$consulta5->execute();
$perfil=$consulta5->fetchAll();

require('../../views/perfiles/index.view.php');