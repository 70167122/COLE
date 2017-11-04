<?php 

function conectar(){

try {


$conexion= new PDO("mysql:host=localhost;dbname=desarrollo","root","");

 return $conexion; 
	
	
} catch (Exception $e) {

	return false;
	
}

}




 ?>