<html>
<head>
<title>PAGINA DE INICIO</title>
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
<!--Iniciamos estructura-->
<div >
<img src="imagenes/portada2.png" id="caja"/>
</div>
<p  id="texto1">Esta universidad esta dedicada a todas aquellas personas 
 que tienen muy agudizado el arte dentro de si mismos en fin, aqui aprenderas
 a entregarte por completo a la musica como al nato que traes tu mismo.
 La Historia de la m�sica es el estudio de las diferentes tradiciones en la m�sica 
 y su ordenaci�n en el tiempo.Dado que toda cultura conocida ha tenido alguna forma
 de manifestaci�n musical, la Historia de la m�sica abarca a todas las sociedades y 
 �pocas, y no se limita, como ha venido siendo habitual, a occidente, donde se ha 
 utilizado la expresi�n historia de la m�sica para referirse a la historia de la 
 m�sica Europea y su evoluci�n en el mundo occidental.
 
La m�sica de una cultura est� estrechamente relacionada con otros aspectos de la cultura, 
como la organizaci�n pol�tica y econ�mica, el desarrollo t�cnico, la actitud de los 
compositores y su relaci�n con los oyentes, las ideas est�ticas m�s generalizadas de cada
 comunidad, la visi�n acerca de la funci�n del arte en la sociedad, as� como las
 variantes biogr�ficas de cada autor.
 
En su sentido m�s amplio, la m�sica nace con el ser humano, y ya estaba presente,
seg�n algunos estudiosos, mucho antes de la extensi�n del ser humano por el planeta,
hace m�s de 50.000 a�os.1 Es por tanto una manifestaci�n cultural universal.
</p>
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
