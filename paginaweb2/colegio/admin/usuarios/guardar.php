<?php 


    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Tipopersonal = $_POST['Tipopersonal'];
	$Usuario=$_POST['Usuario'];
	$Password=$_POST['Password'];
	


	$query = $conexion->prepare("INSERT INTO usuarios (tipopersonal_id,usuario,password) VALUES(:Tipopersonal,:Usuario,:Password)");
	$query->bindParam(':Tipopersonal',$Tipopersonal);
	$query->bindParam(':Usuario',$Usuario);
	$query->bindParam(':Password',$Password);
	$query->execute();

	header("Location: ".RUTA."admin/usuarios");

 ?>