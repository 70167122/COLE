<?php 

	session_start();

	require 'config/config.php';

	session_destroy();

	header("location: ".RUTA."login.php");

 ?>