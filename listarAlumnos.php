<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	include 'conexion.php';

	$consulta=  mysql_query("select * from usuarios where tipo = 'alumno' and cuatrimestre = '".$_GET['cuatrimestre'] ."'") or die("Fallo la conexion");
	$n_Filas=  mysql_num_rows($consulta);
	$idM = $_GET['idMateria'];

	if($n_Filas > 0){


		for($i=0;$i<$n_Filas;$i++){
			$info=mysql_fetch_array($consulta);
			echo "
			 <ul class='collection'>
			    <li class='collection-item avatar'>
			      <img src='img/estudiante.png' alt='' class='circle'>
			      <span class='title'>".$info['nombre']."</span>
			      <p>".$info['apellido']."<br>
			         ".$info['matricula']."<br>
			         ".$info['cuatrimestre']."<br>
			      </p>
				  <button onclick='addAlumno(".$idM.",".$i.",".$info['nombre'].",".$info['apellido'].",".$info['matricula'].")' class='secondary-content btn waves-effect waves-light' type='submit' name='action'>Submit
				    <i class='material-icons right'>Agregar</i>
				  </button>
			    </li>
			  </ul>";

			/*print($info["nombre"]);
			print($info["apellido"]);
			print($info["matricula"]);
			print($info["cuatrimestre"]);
			print($info["email"]);
			print($info["contrasena"]);
			*/
		}
	}
 ?>

</body>
</html>
