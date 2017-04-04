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
	      <a href="#" class="brand-logo">Horario</a>
	      <ul id="nav-mobile" class="right  hide-on-med-and-down">
	      	<?php
	      		if($_SESSION['tipo'] != "alumno"){
	      			echo '<li><a href="Cursos.php">Registrar Curso</a></li> ';
	      		}
	      	?>
	        <li><a href="horario.php">Horario</a></li>
	        <li><a href="cerrarSesion.php">Cerrar sesión</a></li>
	      </ul>
	    </div>
	  </nav>

	<main>
		<?php 
			include('listarHorario.php');
		?>
	</main>
</body>
</html>
