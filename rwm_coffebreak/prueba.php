<?php
include("conexion.php");
$conex=conectar();

if(isset($_POST['nombre']) && !empty ($_POST['nombre'])){
	
mysql_query("INSERT INTO donantes(nombre, ap_p, ap_m, municipio, estado, tipo_sangre, organo, mensaje) 
	VALUES ('$_POST[nombre]','$_POST[ap_p]','$_POST[ap_m]','$_POST[municipio]','$_POST[estado]','$_POST[tipo_sangre]','$_POST[organo]','$_POST[mensaje]')",$conex);
echo ("Conexion exitosa");
echo ("Datos Recibidos");
}else {
	echo "problemas al insertar los datos";
	}

?>