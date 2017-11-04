<?php 


    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	
	$Curso = $_POST['Curso'];

	$Grado=$_POST['Grado'];

	$id= $_POST['id'];
	



	$query = $conexion->prepare(" UPDATE cursos_grados SET curso_id=:Curso,grado_id=:Grado WHERE id=:id");
		$query->bindParam(':Curso',$Curso);
	$query->bindParam(':Grado',$Grado);
	$query->bindParam(':id',$id);
	
	$query->execute();

	header("Location: ".RUTA."admin/cursos_grado");

 ?>