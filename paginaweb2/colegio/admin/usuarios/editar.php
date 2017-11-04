<?php 

    require('../../config/conexion.php');
	require('../../config/config.php');

	$conexion = conectar();

	$Tipopersonal = $_POST['Tipopersonal'];
	$Usuario=$_POST['Usuario'];
	$Password=$_POST['Password'];
	
	
	
	$id= $_POST['id'];
	

	$query = $conexion->prepare(" UPDATE usuarios SET tipopersonal_id=:Tipopersonal,usuario=:Usuario, password=:Password,  WHERE id=:id");
	$query->bindParam(':Tipopersonal',$Tipopersonal);
	$query->bindParam(':Usuario',$Usuario);
	$query->bindParam(':Password',$Password);
	$query->bindParam(':id',$id);
	$query->execute();

	header("Location: ".RUTA."admin/usuarios");







 ?>