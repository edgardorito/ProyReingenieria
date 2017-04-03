<?php
   include("conexion.php");
   session_start();
   
   if(!isset($_SESSION['usuario']))
   {
    if(isset($_POST['login']))
    {
        $myusername = "edgardo";//$_POST['username'];
      $mypassword = "edo";// $_POST['password']; 
      
      $consulta=  mysql_query("select id FROM usuarios WHERE nombre = '$myusername' and contrasena = '$mypassword'") or die("Fallo la conexion");
      $n_Filas=  mysql_num_rows($consulta);

      $row = mysql_fetch_array($consulta);

   
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($n_Filas == 1) {
   
         $_SESSION['usuario'] = $myusername;
         $_SESSION['id'] = $row["id"];
         header("location: index.php");
      }       
          else
          {
              echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
          }
      }

   }
?>
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
			    <form class="col s6 offset-s2 #fafafa grey lighten-5">


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

			    <div class="">
			    	 <div class="col s5">
					      <div class="input-field col s6 offset-s4">
						      <button class="btn waves-effect waves-light #4fc3f7 light-blue lighten-2" type="" name="action">Registrar_Alumno
							  </button>
						  </div>
					  </div>

					  <div class="col s1">
					      <div class="input-field col s6 offset-s4">
						      <button class="btn waves-effect waves-light #4fc3f7 light-blue lighten-2" type="" name="action">Registrar_PTC
							  </button>
						  </div>
					  </div>
				</div>

			</div>
  	   </div>




</body>
</html>