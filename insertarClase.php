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
/*if(isset($_REQUEST['curso']) and isset($_REQUEST['horario'])  and isset($_REQUEST['dia']) )
{
if(!(empty($_REQUEST['curso']) or empty($_REQUEST['horario'])  or empty($_REQUEST['dia']) )){
*/
$nombre=$_REQUEST["nombre"];
$curso=$_REQUEST["name"];
$horario=$_REQUEST["Horario"];
$dia=$_REQUEST["dia"];



include("conexion.php");
$insertar="INSERT INTO  cursonuevo ";
$insertar.=" (nombre,curso,horario,dia) ";
$insertar.=" VALUES('$nombre','$curso','$horario','$dia'); ";
$ingresarConsulta=mysql_query($insertar,$manejador);
if($ingresarConsulta)
{
echo("<br><br><div>SE HA INSERTADO EL REGISTRO</div>");
}

?>

</fieldset>
</center>

<a href="consultar_Curso.php">Regresar</a>

</body>
</html>
