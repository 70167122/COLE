<?php 

session_start();
require('../../config/conexion.php');
require('../../config/config.php');

if (!isset($_SESSION['login'])) {
	header("location: ".RUTA."ingresar.php");
}

require ("../../PDO_Pagination.php");




require('../../header.php');


$conexion = conectar();
$connection = new PDO("mysql:host=localhost;dbname=desarrollo","root","");
$pagination = new PDO_Pagination($connection);

$search = null;
if(isset($_POST["search"]) && $_POST["search"] != "")
{
	$search = htmlspecialchars($_REQUEST["search"]);
	$pagination->param = "&search=$search";
	$pagination->rowCount("SELECT * FROM personales WHERE nombre LIKE '%$search%'");
	$limite=10;
	$plimite=10;
	$pagination->config($plimite, $limite);
	$sql = "SELECT * FROM personales WHERE nombre LIKE '%$search%' ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows"; 
	echo $sql;
	$query = $connection->prepare($sql);
	$query->execute();
	$resultado = array();
	while($rows = $query->fetch())
	{
	    $resultado[] = $rows;
	}
}
else
{
	$pagination->rowCount("SELECT * FROM personales");
	$limite=5;
	$plimite=5;
	$pagination->config($plimite, $limite);
	$sql = "SELECT * FROM personales ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows";
	$query = $connection->prepare($sql);
	$query->execute();
	$resultado = array();
	while($rows = $query->fetch())
	{
	    $resultado[] = $rows;
	}
}

$consulta=$conexion->prepare("SELECT * FROM especialidades");
$consulta->execute();
$especialidad=$consulta->fetchAll();


$consulta=$conexion->prepare("SELECT * FROM categorias");
$consulta->execute();
$categoria=$consulta->fetchAll();








//consulta para mostrar usuarios
$consulta5=$conexion->prepare("SELECT personales.id,personales.nombre,personales.apellido,personales.telefono,personales.correo_electronico,especialidades.descripcione,personales.tiempo_servicio,personales.nivel,categorias.descripcion,personales.especialidad_id,personales.categoria_id FROM personales INNER JOIN especialidades on personales.especialidad_id=especialidades.id INNER JOIN categorias on personales.categoria_id=categorias.id  where personales.nombre like '%$search%' or especialidades.descripcione like '%$search' or categorias.descripcion like '%$search' ");
$consulta5->execute();
$personal=$consulta5->fetchAll();

require('../../views/personales/index.view.php');

