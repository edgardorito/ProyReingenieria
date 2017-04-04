<?php
	include("conexion.php");
    $consulta=  mysql_query("select * FROM cursos WHERE idptc = '".$_SESSION['id'] ."'") or die("Fallo la conexion");
    $n_Filas=  mysql_num_rows($consulta);

//    $row = mysql_fetch_array($consulta);
	if ($n_Filas > 0) {
	    // output data of each row
	    while($row =  mysql_fetch_array($consulta)) {
	    	echo '<ul class="collection"><li class="collection-item avatar"><img src="img/book.png" alt="" class="circle"><span class="title">Materia: '.$row['materia'].'</span><p>Horario: '.$row['horario'].' <br>Grupo: '.$row['grupo'].' <br> Cuatrimestre: '.$row['cuatrimestre'].'</p><a href="#!" class="secondary-content"><i class="material-icons">grade</i></a></li><a href="anadirAlumnos.php?idMateria='.$row['id'].'&cuatrimestre='.$row['cuatrimestre'].'&grupo='.$row['grupo'].'&materia= '.$row['materia'].'&idptc='.$_SESSION['id'] .' " class="btn waves-effect waves-light">Añadir alumnos</a></ul>';
	        
	    }
	}else{
		echo "no ".$_SESSION['id'];
	}
   
?>

