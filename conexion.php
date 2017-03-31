<?php
	$servidor="ERIDE";
	$user="jeje";
	$clave="uno";
	$manejador=@mysql_connect($servidor,$user,$clave);
	$basedeDatos="proyreing";
	//se establece la conexion
	mysql_select_db($basedeDatos,$manejador);
?>
