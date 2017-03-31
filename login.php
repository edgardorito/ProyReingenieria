<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<meta charset="utf-8">

	  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <link rel="stylesheet" type="text/css" href="css/estiloLogin.css"> 
</head>
<body>

<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

<br>
<br>
<br>
<br>
<br>
<br>
<br>


      <div class="row">
      		<div class="col s4">
      			<img src="imagenes/docente.png">
      		</div>

      		<div class="col s8">
			    <form class="col s6 offset-s2 blue lighten-5">


				      <div class="row">
				        <div class="input-field col s8 offset-s2">
				          <input id="first_name" type="text" class="validate">
				          <label for="first_name">Usuario</label>
				        </div>
				      </div>
				      
				      <div class="row">
				        <div class="input-field col s8 offset-s2">
				          <input id="password" type="password" class="validate">
				          <label for="password">Password</label>
				        </div>
				      </div>

				      <div class="row">
					      <div class="input-field col s6 offset-s4">
						      <button class="btn waves-effect waves-light" type="submit" name="action">ingresar
							    <i class="material-icons right">send</i>
							  </button>
						  </div>
					  </div>

			    </form>
			</div>
  	   </div>



</body>
</html>