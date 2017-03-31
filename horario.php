<html>
<head>
<title>PAGINA DE INICIO</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<head>
<script type="text/javascript">
function face(){
window.location="www.facebook.com";
}
function twit(){
window.location="www.twitter.com";
}
function goo(){
window.location="www.google.com";
}
function busca(){
window.location="www.google.com";
}
</script>
<body>
<div>
<img src="imagenes/violin3.jpg" width="1250" height="200" align="left"/>
</div>
<!--Menu-->
<center><div>

		<a href="inicio2.php">Home</a>
		<a href="consultar_Curso.php">Curso</a>
		<a href="horario.php">Horario</a>
	    <a href="salir.php">Salir</a>


</div></center>
<h5>Bienvenido
<?PHP 
include ("seguridad.php");
echo $_SESSION["user"];
?></h5>



	
<form action='horario.php' method='post'>
<?php

									include("conexion.php");
									$consulta="SELECT nombre FROM  cursonuevo ";
									$hacerConsulta=mysql_query($consulta,$manejador);
									$numerodeRegistros=mysql_num_rows($hacerConsulta);
										//llenamos el combo
									
										echo("<label >Alumno:<label>");
										echo("<select name='consulta1' >");
										for($contador=0;$contador<$numerodeRegistros;$contador++)
										{
										$nombre=mysql_result($hacerConsulta,$contador,"Nombre");

												echo("<option value='$nombre'>".$nombre."</option>");

										}
										echo("</select>");
									

								?>
								<input type='submit' value='envio' name='Envio'/>
								

									
<br>
<?php
if(isset($_POST['Envio']))
{
$seleccion =  $_REQUEST['consulta1'];
									include("conexion.php");
									$consulta="SELECT cursonuevo.nombre,cursonuevo.curso,cursonuevo.horario,cursonuevo.dia FROM cursonuevo INNER JOIN registro ON cursonuevo.nombre=registro.nombre ORDER BY cursonuevo.nombre ";
									$hacerConsulta=mysql_query($consulta,$manejador);
									$numerodeRegistros=mysql_num_rows($hacerConsulta);
										
										for($contador=0;$contador<$numerodeRegistros;$contador++)
										{
									   
										$nombre=mysql_result($hacerConsulta,$contador,"nombre");
											$curso=mysql_result($hacerConsulta,$contador,"curso");
												$horario=mysql_result($hacerConsulta,$contador,"horario");
													$dia=mysql_result($hacerConsulta,$contador,"dia");
														

												echo($nombre);
												echo("</br>");
												echo($curso);
												echo("</br>");
												echo($horario);
												echo("</br>");
												echo($dia);
												echo("</br>");
										}
									
}	

								?>



<br>
<div  id="pie_pagina">
									<span id="colorBlanco">Buscador de Google</span>
									    <form action="www.google.com" method="post" name="lol">
                                        <input type="text" class="inputs" id="dia" name="dia" size="50" maxlength="50"/>
									    <input type="button" value="Buscar" id="tamanoBuscador"  onClick="busca()" />
										<img src="imagenes/facebook.png" width="50" height="50" align="right" onClick="face()"  />		
										<img src="imagenes/twitter.png" width="50" height="50" align="right"   onClick="twit()" />
										<img src="imagenes/google+.png" width="50" height="50" align="right"    onClick="goo()"/>
									 </br>	
								    <span id="colorBlanco">Buscador de Google</span>
									
								
</div>

</body>
</html>
