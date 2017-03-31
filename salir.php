<html>
<head>
<title>SALIR</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<head>
<body>
<?PHP
session_start();
session_destroy();
if ($_SESSION["autentificado"] != "1") {
//si no existe, se dirige a la Página de Inicio
header("Location: entrada.php");
//salimos del script
exit();
}
?>
<div>
<a href="inicio.php"><img src="imagenes/salida.png" width="1250" height="900" align="left"/></a>
</div>
</body>
</html>