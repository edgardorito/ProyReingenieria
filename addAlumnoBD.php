 <?php
 $servername = "ERIDE";
$username = "jeje";
$password = "uno";
$dbname = "proyreing";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//variables POST  
//idM, idA,nombre, apellido, matricula
  $idM = $_GET['idM']; 
  $idA = $_GET['idA'];
  $nombre = $_GET['nombre'];
  $apellido = $_GET['apellido']; 
  $matricula = $_GET['matricula']; 
 
//registra los datos del empleados
  $sql="INSERT INTO alumnoscursos (idmateria, idalumno,nombre, apellido, matricula) VALUES ('$idM', '$idA','$nombre','$apellido','$idA')";

if ($conn->query($sql) === TRUE) {
  echo "sucess";
} else {
  echo "fail";
}

$conn->close();
 
?>