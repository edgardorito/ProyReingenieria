<html>
<head>
<title>NUEVO GRUPO</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
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
<head>
<body>
<div>
<img src="imagenes/violin4.jpg" width="1250" height="200" align="left"/>
</div>
<!--Menu-->
<center><div>

		<a href="inicio.php">Home</a>
		<a href="consultar_Curso.php">Curso</a>
		<a href="horario.php">Horario</a>
	    <a href="salir.php">Salir</a>


</div></center>
<h5>Bienvenido
<?PHP 
include ("seguridad.php");
echo $_SESSION["user"];
?></h5>

<!--Formulario Clase-->
        <div id="fondo">
            <div id="formulario" >
                    <form action="insertarClase.php" method="post" ><!--recibos.php-->
                            <fieldset>
                                <legend id="legend"> Registro de Grupos</legend>
								<!-- mostrando alumno-->

				
				
	
					<?php

									include("conexion.php");
									$consulta="SELECT name FROM cursosesc ";
									$hacerConsulta=mysql_query($consulta,$manejador);
									$numerodeRegistros=mysql_num_rows($hacerConsulta);
										//llenamos el combo
										echo("<label >Clases:<label>");
										echo("<select name='name' >");
										for($contador=0;$contador<$numerodeRegistros;$contador++)
										{
									    
										$nombre=mysql_result($hacerConsulta,$contador,"name");

												echo("<option value='$nombre'>".$nombre."</option>");

										}
										echo("</select>");
										

								?>


									<?php

									include("conexion.php");
									$consulta="SELECT nombre FROM registro ";
									$hacerConsulta=mysql_query($consulta,$manejador);
									$numerodeRegistros=mysql_num_rows($hacerConsulta);
										//llenamos el combo
										echo("<label >Nombre:<label>");
										echo("<select name='nombre' >");
										for($contador=0;$contador<$numerodeRegistros;$contador++)
										{
									    
										$nombre=mysql_result($hacerConsulta,$contador,"nombre");

												echo("<option value='$nombre'>".$nombre."</option>");

										}
										echo("</select>");
										

								?>

						
                              

					<label >Horario:<label>
					<select name="Horario">
					<option>8am - 9am</option>
					<option>9am - 10am</option>
					<option>10am - 11am</option>
					<option>11am - 12am</option>
					</select>	


					<label >Día:<label>
					<select name="dia">
					<option>Lunes</option>
					<option>Martes</option>
					<option>Miercoles</option>
					<option>Jueves</option>
					<option>Viernes</option>
					</select>	

					


								</div>
								
								<input type="submit"  id="registrar" name='envioSI' value="ACEPTAR" />
								</br>
									
                            </fieldset>
					</form>
            </div>
        </div>
		
				

 			
<!--Fin de Formulario Clase-->
				<br>
				<br>
<div  id="pie_pagina">
									<span id="colorBlanco">Buscador de Google</span>
									    <form action="www.google.com" method="post" name="lol">
                                        <input type="text" class="inputs" id="dia" name="dia" size="50" maxlength="50"/>
									    <input type="button" value="Buscar" name="buscar" id="tamanoBuscador" onClick="busca()" />
										<img src="imagenes/facebook.png" width="50" height="50" align="right" onClick="face()"  />		
										<img src="imagenes/twitter.png" width="50" height="50" align="right"   onClick="twit()" />
										<img src="imagenes/google+.png" width="50" height="50" align="right"    onClick="goo()"/>
									 </br>	
								    <span id="colorBlanco">Buscador de Google</span>
									
								
</div>
</body>
</html>
