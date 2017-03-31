<?php
$servidor="localhost";
$user="jeje";
$clave="uno";
$manejador=@mysql_connect($servidor,$user,$clave);
$basedeDatos="reingeniera";
//se establece la conexion
mysql_select_db($basedeDatos,$manejador);
?>
