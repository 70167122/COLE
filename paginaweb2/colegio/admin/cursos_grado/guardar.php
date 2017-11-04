<?php 


    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Curso = $_POST['Curso'];

	$Grado=$_POST['Grado'];



	$query = $conexion->prepare("INSERT INTO cursos_grados(curso_id,grado_id) VALUES(:Curso,:Grado)");
	
	$query->bindParam(':Curso',$Curso);
	$query->bindParam(':Grado',$Grado);
	
	$query->execute();

	header("Location: ".RUTA."admin/cursos_grado");

 ?>