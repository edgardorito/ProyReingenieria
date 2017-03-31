<html>
<head>
<title>Alumnos</title>
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
</head>
<body>
<div>
<img src="imagenes/violin4.jpg" width="1250" height="200" align="left"/>
</div>
<!--Menu-->

<center><div>


		<a href="inicio.php">Home</a>
		<a href="consultar_Alumn.php">Alumnos</a>
		<a href="registrarCurso.php">Curso</a>
	    <a href="salir.php">Salir</a>



</div></center>

<h5>Bienvenido
<?PHP 
include ("seguridad.php");
echo $_SESSION["user"];
?>
</h5>



<div id="fondo">

<div id="formulario" >
<fieldset>




<!--Formulario-->
        
        <table border="1" align='left' cellspacing="0" id="table3">

       <?php
        include("conexion.php");
        $consulta=  mysql_query("select * from registro") or die("Fallo la conexion");
        $n_Filas=  mysql_num_rows($consulta);

        if($n_Filas > 0){
         print("<tr>");
         print("<td>Nombre completo</td>"); 
         print("<td>Usuario</td>"); 
         print("<td>Password</td>"); 
         print("<td>Email</td>"); 
         
         print("</tr>");
         
         for($i=0;$i<$n_Filas;$i++){
         
             $info=mysql_fetch_array($consulta);
		          
             print("<tr>");
             print("<td>".$info["nombre"]."</td>");
             print("<td>".$info["user"]."</td>");
             print("<td>".$info["pass"]."</td>");
             print("<td>".$info["email"]."</td>");
             print("<td><a href='email.php' id='css'><center><img src='imagenes/enviado.jpg'></center></a></td>");
             
             
             
             
             print("</tr>");
             
         }
         
        }else{
            
         print("<tr><td>La tabla esta vacía</tr></td>");
            
        }
        ?>
      </table>
</div>

</div>
</fieldset>
<br>
<br>
        
<!--Fin de Formulario-->

<!--Ingresamos el alumno-->

<!--Fin-->
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
