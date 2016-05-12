<?php 
	session_start();
	
	header("Content-Type: text/html; charset=utf-8");
	
	include("comande/comande/utilities/connection.php");
	include("comande/comande/utilities/classes.php");
	
	$Consulta 			= new Consulta; 
	
	define("URL_ABSOLUTA", "http://www.salvadorfest.com.br/2016");
	
?>