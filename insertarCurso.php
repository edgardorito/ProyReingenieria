<html>
<head>
<title>Insertar</title>
  <link href="css/estilo.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/index.css" media="screen" />
</head>
<body>
<div>
<img src="imagenes/violin4.jpg" width="1250" height="200" align="left"/>
</div>
<!--Menu-->


<center>

<div id="fondo">
            <div id="formulario" >
                                   <fieldset>


<?php
if(isset($_REQUEST['nombre']) and isset($_REQUEST['precio']) and isset($_REQUEST['fechaIni']) and isset($_REQUEST['fechaFin'])  and isset($_REQUEST['horas']) and isset($_REQUEST['dias']) )
{
if(!(empty($_REQUEST['nombre']) or empty($_REQUEST['precio']) or empty($_REQUEST['fechaIni']) or empty($_REQUEST['fechaFin']) or empty($_REQUEST['horas']) or empty($_REQUEST['dias']))){
$nombre=$_REQUEST["nombre"];
$precio=$_REQUEST["precio"];
$fechaIni=$_REQUEST["fechaIni"];
$fechaFin=$_REQUEST["fechaFin"];
$horas=$_REQUEST["horas"];
$dias=$_REQUEST["dias"];

include("conexion.php");
$insertar="INSERT INTO  curso ";
$insertar.=" (nombre,precio,fechaIni,fechaFin,horas,dias) ";
$insertar.=" VALUES('$nombre','$precio','$fechaIni','$fechaFin','$horas','$dias'); ";
$ingresarConsulta=mysql_query($insertar,$manejador);
if($ingresarConsulta)
{
echo("<br><br><div>SE HA INSERTADO EL REGISTRO</div>");
}
}
}

?>

</fieldset>
</center>

<a href="registrarCurso.php">Regresar</a>

</body>
</html>
