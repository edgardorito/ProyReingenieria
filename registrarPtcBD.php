
<?php
$servername = "localhost";
$username = "jeje";
$password = "uno";
$dbname = "proyreing";
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$contrasena= $_POST['contrasena'];
$matricula= $_POST['matricula'];
$cuatrimestre= $_POST['cuatrimestre'];
$email= $_POST['email'];
$tipo= $_POST['tipo'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO registroalumno (nombre,apellido,matricula,email,tipo,contrasena) values ('$nombre','$apellido','$matricula','$email','ptc', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Registro exitoso'); </script>";
    header('Location: login.php');
} else {
	echo "<script> alert('Registro fallido'); </script>";
	header('Location: registroPTC.php');
}

$conn->close();
?>