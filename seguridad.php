<?PHP
//Inicio la sesi�n
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ($_SESSION["autentificado"] != "1") {
//si no existe, se dirige a la P�gina de Inicio
header("Location: entrada.php");
//salimos del script
exit();
}
?>