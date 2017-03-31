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
 La Historia de la música es el estudio de las diferentes tradiciones en la música 
 y su ordenación en el tiempo.Dado que toda cultura conocida ha tenido alguna forma
 de manifestación musical, la Historia de la música abarca a todas las sociedades y 
 épocas, y no se limita, como ha venido siendo habitual, a occidente, donde se ha 
 utilizado la expresión historia de la música para referirse a la historia de la 
 música Europea y su evolución en el mundo occidental.
 
La música de una cultura está estrechamente relacionada con otros aspectos de la cultura, 
como la organización política y económica, el desarrollo técnico, la actitud de los 
compositores y su relación con los oyentes, las ideas estéticas más generalizadas de cada
 comunidad, la visión acerca de la función del arte en la sociedad, así como las
 variantes biográficas de cada autor.
 
En su sentido más amplio, la música nace con el ser humano, y ya estaba presente,
según algunos estudiosos, mucho antes de la extensión del ser humano por el planeta,
hace más de 50.000 años.1 Es por tanto una manifestación cultural universal.
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
