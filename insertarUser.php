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
if(isset($_REQUEST['nombre']) and isset($_REQUEST['user']) and isset($_REQUEST['pass']) and isset($_REQUEST['email']) )
{
if(!(empty($_REQUEST['nombre']) or empty($_REQUEST['user']) or empty($_REQUEST['pass']) or empty($_REQUEST['email']))){
$nombre=$_REQUEST["nombre"];
$usuario=$_REQUEST["user"];
$pass=$_REQUEST["pass"];
$email=$_REQUEST["email"];

include("conexion.php");
$insertar="INSERT INTO  registro ";
$insertar.=" (nombre,user,pass,email) ";
$insertar.=" VALUES('$nombre','$usuario','$pass','$email'); ";
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

<a href="entrada.php">Regresar</a>

</body>
</html>
