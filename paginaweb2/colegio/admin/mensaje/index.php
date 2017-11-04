<?php 

session_start();
require('../../config/conexion.php');
require('../../config/config.php');

if (!isset($_SESSION['login'])) {
	header("location: ".RUTA."ingresar.php");
}

require ("../../PDO_Pagination.php");


$conexion = conectar();

$consulta = $conexion -> prepare("SELECT COUNT(*) FROM `mensaje` WHERE estado = 'A'");
$consulta -> execute();

$cantidad_mensajes = $consulta -> fetch();

require '../../header.php';

$connection = new PDO("mysql:host=localhost;dbname=desarrollo","root","");
$sql = "SELECT * FROM mensaje where estado='A'"; 
$query = $connection->prepare($sql);
$query->execute();
$mensaje = array();
while($rows = $query->fetch())
{
    $mensaje[] = $rows;
}


require('../../views/mensajes/index.view.php');
?>