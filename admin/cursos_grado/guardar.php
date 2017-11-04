<?php 

	date_default_timezone_set('America/Lima');
    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Curso = $_POST['Curso'];

	$Grado=$_POST['Grado'];
	$fecha = date("Y-m-d H:i:s");



	$query = $conexion->prepare("INSERT INTO cursos_grados(curso_id,grado_id,created_at) VALUES(:Curso,:Grado,:created)");
	
	$query->bindParam(':Curso',$Curso);
	$query->bindParam(':Grado',$Grado);
	$query->bindParam(':created',$fecha);
	
	$query->execute();

	header("Location: ".RUTA."admin/cursos_grado");

 ?>