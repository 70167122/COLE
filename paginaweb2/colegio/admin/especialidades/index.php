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
	$pagination->rowCount("SELECT * FROM especialidades WHERE descripcione LIKE '%$search%' '");
	$limite=10;
	$plimite=10;
	$pagination->config($plimite, $limite);
	$sql = "SELECT * FROM especialidades WHERE descripcione LIKE '%$search%' ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows"; 
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
	$pagination->rowCount("SELECT * FROM especialidades");
	$limite=10;
	$plimite=10;
	$pagination->config($plimite, $limite);
	$sql = "SELECT * FROM especialidades ORDER BY id ASC LIMIT $pagination->start_row, $pagination->max_rows";
	$query = $connection->prepare($sql);
	$query->execute();
	$resultado = array();
	while($rows = $query->fetch())
	{
	    $resultado[] = $rows;
	}
}

require('../../views/especialidades/index.view.php');














