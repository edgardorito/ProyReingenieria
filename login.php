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

	  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
</head>
<body>

<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

 	  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email" type="email" class="validate">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
      </div>
    </form>
  </div>


</body>
</html>