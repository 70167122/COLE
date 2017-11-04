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
	$pagination->rowCount("SELECT * FROM grados WHERE descripciong LIKE '%$search%'");
	$limite=10;
	$plimite=10;
	$pagination->config($plimite, $limite);
	$sql = "SELECT * FROM grados WHERE descripciong LIKE '%$search%' ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows"; 
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
	$pagination->rowCount("SELECT * FROM grados");
	$limite=5;
	$plimite=5;
	$pagination->config($plimite, $limite);
	$sql = "SELECT * FROM grados ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows";
	$query = $connection->prepare($sql);
	$query->execute();
	$resultado = array();
	while($rows = $query->fetch())
	{
	    $resultado[] = $rows;
	}
}

$consulta=$conexion->prepare("SELECT * FROM niveles_de_estudio");
$consulta->execute();
$nivel=$consulta->fetchAll();

//consulta para mostrar usuarios
$consulta5=$conexion->prepare("SELECT grados.id,grados.descripciong,niveles_de_estudio.descripcion,grados.nivelestudio_id FROM grados INNER JOIN niveles_de_estudio on grados.nivelestudio_id=niveles_de_estudio.id where grados.descripciong like '%$search%' or niveles_de_estudio.descripcion like '%$search' ");
$consulta5->execute();
$grado=$consulta5->fetchAll();

require('../../views/grados/index.view.php');

