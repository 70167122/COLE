<?php 

    session_start();
	require 'config/config.php';
    
    $_SESSION = array();
    session_destroy();
    header("location: ".RUTA."ingresar.php");

 ?>