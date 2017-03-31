<?PHP

session_start();


if(isset($_POST['usuario']) && isset($_POST['contrasena']) && $_POST['usuario']=="admin" &&  $_POST['contrasena']=="123")
{
//usuario y contrasena validos
//crear variable para la sesion
$_SESSION["autentificado"]="1";
$_SESSION["user"]=$_POST["usuario"];
$_SESSION["pass"]=$_POST["contrasena"];
//si el usuario y la contrasena son validos
header("Location:inicio.php");
}
	else
	{
	//si no existe ir ala pagina de inicio
	header("Location:inicio2.php ");
	}
	
	
if(isset($_POST['usuario']) && isset($_POST['contrasena']) && $_POST['usuario']=="hugooSoul" &&  $_POST['contrasena']=="hhh")
{
//usuario y contrasena validos
//crear variable para la sesion
$_SESSION["autentificado"]="1";
$_SESSION["user"]=$_POST["usuario"];
$_SESSION["pass"]=$_POST["contrasena"];
//si el usuario y la contrasena son validos
header("Location:inicio2.php");
}
	else
	{
	//si no existe ir ala pagina de inicio
	header("Location:inicio.php ");
	}
?>
