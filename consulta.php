<?php 

require "config/conexion.php";
$conexion=conectar();
$perfil = 1;
for ($i=1; $i <=108 ; $i++) { 

	for ($j=1; $j <=4 ; $j++) { 
		
		$consulta=$conexion->prepare("INSERT INTO restricciones_perfiles (perfil_id,	restriccion_id,modulo_id) VALUES(:perfil,:restri,:modulo)");
		$consulta -> bindParam(":perfil",$perfil);
		$consulta -> bindParam(":restri",$j);
		$consulta -> bindParam(":modulo",$i);


		$consulta->execute();
	}
}




 ?>