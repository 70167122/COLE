<?php 

session_start();
require('../../config/conexion.php');
require('../../config/config.php');

if (!isset($_SESSION['login'])) {
	header("location: ".RUTA."ingresar.php");
}

$connection = new PDO("mysql:host=localhost;dbname=desarrollo","root","");
$sql = "SELECT * FROM aulas";
	$query = $connection->prepare($sql);
	$query->execute();
	$aulas = array();
	while($rows = $query->fetch())
	{
	    $aulas[] = $rows;
	}

$sql2 = "SELECT * FROM turnos";
	$query2 = $connection->prepare($sql2);
	$query2->execute();
	$turnos = array();
	while($rows = $query2->fetch())
	{
	    $turnos[] = $rows;
	}


$sql3 = "SELECT ne.*,COUNT(g.id) as grads from grados as g inner join niveles_de_estudio as ne on g.nivelestudio_id=ne.id GROUP by ne.id order by ne.id asc";
	$query3 = $connection->prepare($sql3);
	$query3->execute();
	$nivel = array();
	while($rows = $query3->fetch())
	{
	    $nivel[] = $rows;
	}

$sql4 = "SELECT * FROM grados order by nivelestudio_id";
	$query4 = $connection->prepare($sql4);
	$query4->execute();
	$grados = array();
	while($rows = $query4->fetch())
	{
	    $grados[] = $rows;
	}

$sql5 = "SELECT ca.aula_id,ca.turno_id , cg.grado_id as id_grado from cargas_academica as ca inner join cursos_grados as cg on cg.id=ca.cursogrado_id";
	$query5 = $connection->prepare($sql5);
	$query5->execute();
	$carga = array();
	while($rows = $query5->fetch())
	{
	    $carga[] = $rows;
	}



require('../../header.php');


require('../../views/carga_academica/index.view.php');

