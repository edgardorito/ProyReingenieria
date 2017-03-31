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



<!--Formulario-->
        <div id="fondo">
            <div id="formulario" >
                    <form action="insertarCurso.php" method="post" >
                            <fieldset>
                                <legend id="legend"> Registro de Cursos</legend>
                                <div class="divs">
                                    <label  for="nombre"> Nombre: 
                                    <span>Escribe el nombre del curso</span>
                                    </label>
                                    <input type="text" class="inputs" id="nombre" name="nombre" size="40" maxlength="40" /> <br />
                                </div>
                                 <div class="divs">
                                    <label  for="precio"> Precio: 
                                    <span>Escribe aquí el precio del curso</span>
                                    </label>
                                    <input type="text" class="inputs" id="precio" name="precio" size="40" maxlength="50" /> <br />
                                </div>
                                <div class="divs">
                                    <label for="fechaIni"> Fecha de Inicio: 
                                    <span>Escribe aquí la fecha</span>
                                    </label>
                                    <input type="text" class="inputs" id="fechaIno" name="fechaIni" size="40" maxlength="40" /> <br />
                                </div>
								<div class="divs">
                                    <label for="fechaFIn"> Fecha de terinación: 
                                    <span>Escribe aquí la fecha</span>
                                    </label>
                                    <input type="text" class="inputs" id="fechaFin" name="fechaFin" size="40" maxlength="40" /> <br />
                                </div>
								 <div class="divs">
                                    <label for="fechaFIn"> Horas de clase:: 
                                    <span>Escribe aquí las horas de la clase</span>
                                    </label>
                                    <input type="text" class="inputs" id="horas" name="horas" size="40" maxlength="40" /> <br />
                                </div>
								<div class="divs">
                                    <label for="dias"> Días de clase: 
                                    <span>Escribe aquí los días en que se imparte la clase</span>
                                    </label>
                                    <input type="text" class="inputs" id="dias" name="dias" size="40" maxlength="40" /> <br />
                                </div>
								
								 <input type="submit"  id="registrar" value="ACEPTAR" />
							 
                            </fieldset>
					</form>
					
					
            </div>
        </div>
<!--Fin de Formulario-->





<!--Ingresamos el alumno-->

<!--Fin-->

</body>
</html>