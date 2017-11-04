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
	$pagination->rowCount("SELECT * FROM cursos_grados WHERE id LIKE '%$search%'");
	$limite=10;
	$plimite=10;
	$pagination->config($plimite, $limite);
	$sql = "SELECT * FROM cursos_grados WHERE id LIKE '%$search%' ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows"; 
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
	$pagination->rowCount("SELECT * FROM cursos_grados");
	$limite=5;
	$plimite=5;
	$pagination->config($plimite, $limite);
	$sql = "SELECT * FROM cursos_grados ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows";
	$query = $connection->prepare($sql);
	$query->execute();
	$resultado = array();
	while($rows = $query->fetch())
	{
	    $resultado[] = $rows;
	}
}

$consulta=$conexion->prepare("SELECT * FROM cursos");
$consulta->execute();
$cursos=$consulta->fetchAll();


$consulta=$conexion->prepare("SELECT * FROM grados");
$consulta->execute();
$grados=$consulta->fetchAll();











//consulta para mostrar usuarios
$consulta5=$conexion->prepare("SELECT cursos_grados.id,cursos.descripcion,grados.descripciong,cursos_grados.curso_id,cursos_grados.grado_id FROM cursos_grados INNER JOIN cursos on cursos_grados.curso_id=cursos.id INNER JOIN grados on cursos_grados.grado_id=grados.id where cursos.descripcion like '%$search%' or grados.descripciong like '%$search' ");
$consulta5->execute();
$cursos_grado=$consulta5->fetchAll();

require('../../views/cursos_grado/index.view.php');

