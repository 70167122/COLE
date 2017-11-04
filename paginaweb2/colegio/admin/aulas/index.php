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
	$pagination->rowCount("SELECT * FROM aulas WHERE descripcionc LIKE '%$search%'");
	$limite=10;
	$plimite=10;
	$pagination->config($plimite, $limite);
	$sql = "SELECT * FROM aulas WHERE descripcionc LIKE '%$search%' ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows"; 
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
	$pagination->rowCount("SELECT * FROM aulas");
	$limite=5;
	$plimite=5;
	$pagination->config($plimite, $limite);
	$sql = "SELECT * FROM aulas ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows";
	$query = $connection->prepare($sql);
	$query->execute();
	$resultado = array();
	while($rows = $query->fetch())
	{
	    $resultado[] = $rows;
	}
}

$consulta=$conexion->prepare("SELECT * FROM tipos_aula");
$consulta->execute();
$tipo=$consulta->fetchAll();

//consulta para mostrar usuarios
$consulta5=$conexion->prepare("SELECT aulas.id,aulas.descripcionc,tipos_aula.descripcion,aulas.tipoaula_id FROM aulas INNER JOIN tipos_aula on aulas.tipoaula_id=tipos_aula.id where aulas.descripcionc like '%$search%' or tipos_aula.descripcion like '%$search' ");
$consulta5->execute();
$aula=$consulta5->fetchAll();

require('../../views/aulas/index.view.php');

