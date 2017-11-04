<?php 


    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Personal = $_POST['Personal'];
	$Fecha_Entrada=$_POST['Fecha_Entrada'];
	$Fecha_Salida=$_POST['Fecha_Salida'];



	$query = $conexion->prepare("INSERT INTO vigencias(personal_id,fecha_entrada,fecha_salida) VALUES(:Personal,:Fecha_Entrada,:Fecha_Salida)");
	$query->bindParam(':Personal',$Personal);
	$query->bindParam(':Fecha_Entrada',$Fecha_Entrada);
	$query->bindParam(':Fecha_Salida',$Fecha_Salida);
	
	$query->execute();

	header("Location: ".RUTA."admin/vigencias");

 ?>