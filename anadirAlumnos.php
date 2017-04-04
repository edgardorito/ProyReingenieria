<?php
	session_start();
	 if(!isset($_SESSION['usuario'])){
	 	header('Location: login.php' );
	 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>

	  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
	<nav>
	    <div class="nav-wrapper">
	      <a href="horario.php" class="brand-logo left">Volver</a>
	    </div>
	  </nav>
	<main>
		<?php
			include('listarAlumnos.php');
		?>

	</main>
</body>
</html>

