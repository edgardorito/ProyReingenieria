<?php
   include("conexion.php");
   session_start();
   
   if(!isset($_SESSION['usuario']))
   {
    if(isset($_POST['contrasena']))
    {
      $matricula = $_POST['matricula'];
      $mypassword = $_POST['contrasena']; 
      
      $consulta=  mysql_query("select id,tipo,nombre FROM usuarios WHERE matricula = '$matricula' and contrasena = '$mypassword'") or die("Fallo la conexion");
      $n_Filas=  mysql_num_rows($consulta);

      $row = mysql_fetch_array($consulta);

   
      // If result matched $matricula and $mypassword, table row must be 1 row
       echo "<script> alert('".$n_Filas."'); </script>";
      if($n_Filas > 0) {
   
         $_SESSION['matricula'] = $matricula;
         $_SESSION['id'] = $row["id"];
         $_SESSION['usuario'] = $row["nombre"];
         $_SESSION['tipo'] = $row["tipo"];
         header("location: index.php");
      }    
          else
          {
              echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
          }
      }


   }else{
   	header("location: index.php");
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
			    <form action="login.php" method="POST" class="col s6 offset-s2 #fafafa grey lighten-5">


				      <div class="row">
				        <div class="input-field col s8 offset-s2">
				          <input id="matricula"  name="matricula" type="text" class="validate">
				          <label for="matricula">Matricula</label>
				        </div>
				      </div>
				      
				      <div class="row">
				        <div class="input-field col s8 offset-s2">
				          <input id="contrasena" name="contrasena" type="password" class="validate">
				          <label for="contrasena">Contraseña</label>
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
						      <a href="registroAlumno.php" class="btn waves-effect waves-light #4fc3f7 light-blue lighten-2" type="" >Registrar_Alumno
							  </a>
						  </div>
					  </div>

					  <div class="col s1">
					      <div class="input-field col s6 offset-s4">
						      <a href="registroPTC.php" class="btn waves-effect waves-light #4fc3f7 light-blue lighten-2" type=""  >Registrar_PTC
							  </a>
						  </div>
					  </div>
				</div>

			</div>
  	   </div>




</body>
</html>