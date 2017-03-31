<?php
include ('funciones.php');
 //usuario y clave pasados por el formulario
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

//usa la funcion conexiones() que se ubica dentro de funciones.php
if (conexiones($usuario, $clave)){
	 if($usuario!="root" && $clave!="123"){
	 //si es valido accedemos a 
	 
		header('Location:listaTematica.php');
	
	    }
	    else{
	    	 header('Location:inicio.php');
	   
	   }
	
} else {
	//si no es valido volvemos al formulario inicial
	header('Location: inicio2.php');
}
?>
