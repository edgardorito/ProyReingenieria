<html>
<head>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--Formulario-->
        <div id="fondo">
            <div id="formulario" >
                    <form action="comprobar.php" method="POST" >
                            
<tr>
<td colspan="2" align="center">
	<?php
	if(isset($_REQUEST['errorUsuario']) &&  $_REQUEST['errorUsuario']=='si')
	{
	?>
	
	<h1>Datos incorrectos</h1>
		<?php
	}else
	{
	?>
	<h1>Introduce tu clave de acceso</h2>
		<?php
	}
	?>
	</td>
</tr>
<br>

						<fieldset>
                                <legend id="legend">INICIO DE SESION</legend>
                                <div class="divs">
                                    <label  for="usuario"> Login: 
                                    <span>Escribe aquí tu nombre de usuario</span>
                                    </label>
                                    <input type="text" class="inputs" id="usuario" name="usuario" size="50" maxlength="50" /> <br />
                                </div>
                                <div class="divs">
                                    <label  for="contrasena"> Clave: 
                                    <span>Escribe aquí tu clave</span>
                                    </label>
                                    <input type="password" class="inputs" id="contrasena" name="contrasena" size="40" maxlength="50" /> <br />
                                </div>
								<input type="submit"  id="registrar" value="ACEPTAR" />
								<a href="registrarUser.php">Registrar</a>
						</fieldset>
					</form>
            </div>
        </div>
<!--Fin de Formulario-->
</body>
</html>
