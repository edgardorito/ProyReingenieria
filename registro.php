<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="UTF-8">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/registro.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
</head>
<body>

	 <main>
    <div class="row">
    	<center>
        <form  id="forma" class="col s12" action="" method="post">
          <div class="row"><br>
          	<h5>Registrarse</h5><br>
          	<div>
		      <input name="group1" type="radio" id="alumno" />
		      <label for="alumno">Alumno</label>
		      <input name="group1" type="radio" id="ptc" />
		      <label for="ptc">PTC</label>
		    </div><br>
		</center>
          <div class="input-field col s12 m12 l6">
              <i class="material-icons prefix">account_box</i>
              <input required id="nombre" type="text" class="validate" name="nombre">
              <label class="active" for="nombre">Nombre</label>
            </div>
            <div class="input-field col s12 m12 l6">
              <i class="material-icons prefix">account_box</i>
              <input required id="apellido" type="text" class="validate" name="apellido">
              <label class="active" for="apellido">Apellido</label>
            </div>
            <div class="input-field col s12 m12 l6">
              <i class="material-icons prefix">account_circle</i>
              <input required id="contrasena" type="password" class="validate" name="contrasena">
              <label class="active" for="contrasena">Contraseña</label>
            </div>
            <div class="input-field col s12 m12 l6">
              <i class="material-icons prefix">book</i>
              <input required id="matricula" type="text" class="validate" name="matricula">
              <label class="active" for="matricula">Matricula</label>
            </div>
            <div class="input-field col s12 m12 l6">
              <i class="material-icons prefix">email</i>
              <input required id="email" type="email" class="validate" name="email">
              <label class="active" for="email">E-mail</label>
            </div>
            <div class="input-field col s12 m12 l6">
              <i class="material-icons prefix">collections_bookmark</i>
              <input id="cuatrimestre" type="text" class="validate" name="cuatrimestre">
              <label class="active" for="cuatrimestre">Cuatrimestre</label>
            </div>
          </div>
          <center>
            <button class="btn waves-effect waves-light" >Aceptar
                <i class="material-icons right">send</i>
            </button>
            </center>
        </form>
        
      </div>
      </main>
</body>
</html>