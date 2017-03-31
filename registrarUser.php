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





<!--Formulario-->
        <div id="fondo">
            <div id="formulario" >
                    <form action="insertarUser.php" method="post" >
                            <fieldset>
                                <legend id="legend"> Registro de Alumnos</legend>
                                <div class="divs">
                                    <label  for="nombre"> Nombre: 
                                    <span>Escribe aquí tu nombre completo</span>
                                    </label>
                                    <input type="text" class="inputs" id="nombre" name="nombre" size="40" maxlength="40" /> <br />
                                </div>
                                 <div class="divs">
                                    <label  for="usuario"> : 
                                    <span>Escribe aquí el nombre de tu usuario</span>
                                    </label>
                                    <input type="text" class="inputs" id="user" name="user" size="30" maxlength="50" /> <br />
                                </div>
                                <div class="divs">
                                    <label for="apellidoM"> Password: 
                                    <span>Escribe aquí tu contraseña</span>
                                    </label>
                                    <input type="password" class="inputs" id="pass" name="pass" size="30" maxlength="40" /> <br />
                                </div>
								<div class="divs">
                                    <label for="fechaN"> E-mail: 
                                    <span>Escribe aquí tu correo electronico</span>
                                    </label>
                                    <input type="text" class="inputs" id="email" name="email" size="40" maxlength="40" /> <br />
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