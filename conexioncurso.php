<?php
 
//Configuracion de la conexion a base de datos
$servername = "ERIDE";
$username = "jeje";
$password = "uno";
$dbname = "proyreing";

$mat=$_POST['materia'];
  $cua=$_POST['cuatri'];
  $grup=$_POST['grupo'];
  $hor=$_POST['horario'];
  $id=$_POST['id'];

 
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//variables POST
  
  
 
//registra los datos del empleados
  $sql="INSERT INTO cursos (idptc, cuatrimestre, materia,horario,grupo) VALUES ('$id', '$cua', '$mat', '$hor','$grup')";

if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Registro exitoso'); </script>";
    header('Location: index.php');
} else {
  echo "<script> alert('Registro fallido'); </script>";
  header('Location: Cursos.php');
}

$conn->close();
 
?>