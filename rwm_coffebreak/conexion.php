<?php 
function conectar(){
	$user="root";
	$pass="";
	$servidor="localhost";
	$basedatos="donapp";
	$conex=mysql_connect($servidor,$user,$pass) or die ("Error de la conexion".mysql_error());
	
	mysql_select_db($basedatos,$conex);
	
	return $conex;
	}
?>