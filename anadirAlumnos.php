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
	<script type="text/javascript">
		
	function addAlumno(idM, idA,nombre, apellido, matricula) {
	
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		    	if(this.responseText== "sucess"){
		    		alert("se ha guardado alumno")
		    	}else{
		    		alert("no se pudo guardar")
		    	}
		     document.getElementById("demo").innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET", "addAlumnoBD.php?idM="+idM+"&idA="+idA+"&nombre="+nombre+"&apellido="+apellido+"&matricula="+matricula, true);
		  xhttp.send();

	}
	</script>
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

