<?php 

date_default_timezone_set('America/Lima');
    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	
	$Curso = $_POST['Curso'];

	$Grado=$_POST['Grado'];

	$id= $_POST['id'];
		$fecha = date("Y-m-d H:i:s");
	



	$query = $conexion->prepare(" UPDATE cursos_grados SET curso_id=:Curso,grado_id=:Grado,updated_at=:updated WHERE id=:id");
		$query->bindParam(':Curso',$Curso);
	$query->bindParam(':Grado',$Grado);
	$query->bindParam(':updated',$fecha);
	$query->bindParam(':id',$id);
	
	$query->execute();

	header("Location: ".RUTA."admin/cursos_grado");

 ?>