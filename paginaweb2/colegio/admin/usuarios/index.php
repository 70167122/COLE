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
	$pagination->rowCount("SELECT * FROM usuarios WHERE usuario LIKE '%$search%'");
	$limite=10;
	$plimite=10;
	$pagination->config($plimite, $limite);
	$sql = "SELECT * FROM usuarios WHERE usuario LIKE '%$search%' ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows"; 
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
	$pagination->rowCount("SELECT * FROM usuarios");
	$limite=5;
	$plimite=5;
	$pagination->config($plimite, $limite);
	$sql = "SELECT * FROM usuarios ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows";
	$query = $connection->prepare($sql);
	$query->execute();
	$resultado = array();
	while($rows = $query->fetch())
	{
	    $resultado[] = $rows;
	}
}

$consulta=$conexion->prepare("SELECT * FROM tipos_personal");
$consulta->execute();
$tipopersonal=$consulta->fetchAll();

//consulta para mostrar usuarios
$consulta5=$conexion->prepare("SELECT usuarios.id,tipos_personal.descripcion,usuarios.usuario,usuarios.password,usuarios.tipopersonal_id FROM usuarios INNER JOIN tipos_personal on usuarios.tipopersonal_id=tipos_personal.id where usuarios.usuario like '%$search%' or tipos_personal.id like '%$search' ");
$consulta5->execute();
$usuario=$consulta5->fetchAll();

require('../../views/usuarios/index.view.php');

