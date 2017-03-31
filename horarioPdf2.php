<?php
include('pdf/class.ezpdf.php');

if(isset($_POST['Envio']))
{

$seleccion =  $_REQUEST['consulta1'];

//echo $seleccion;						
									/*	
									include("conexion.php");
									$consulta="SELECT * FROM  alumnos  a INNER JOIN alumnoclase  ac ON a.idAlumno=ac.idAlumno  WHERE a.idAlumno=$seleccion  ";
									$hacerConsulta=mysql_query($consulta,$manejador);
									$numerodeRegistros=mysql_num_rows($hacerConsulta);
										
										for($contador=0;$contador<$numerodeRegistros;$contador++)
										{
									   
										$nombre=mysql_result($hacerConsulta,$contador,"Nombre");
											$apePaterno=mysql_result($hacerConsulta,$contador,"ApellidoPaterno");
												$apeMaterno=mysql_result($hacerConsulta,$contador,"ApellidoMaterno");
													$fechaPago=mysql_result($hacerConsulta,$contador,"FechadePago");
														$cicloEscolar=mysql_result($hacerConsulta,$contador,"cicloEscolar");
															$idGrupo=mysql_result($hacerConsulta,$contador,"idGrupo");


												echo($nombre);
												echo("</br>");
												echo($apePaterno);
												echo("</br>");
												echo($apeMaterno);
												echo("</br>");
												echo($fechaPago);
												echo("</br>");
												echo($cicloEscolar);
												echo("</br>");
												echo($idGrupo);
												echo("</br>");

										}
									
*/


								include("conexion.php");
									$consulta="SELECT nombre,curso,horario,dia FROM  cursonuevo WHERE c.nombre=$seleccion  ";
									$hacerConsulta=mysql_query($consulta,$manejador);
									$numerodeRegistros=mysql_num_rows($hacerConsulta);
										
										for($contador=0;$contador<$numerodeRegistros;$contador++)
										{
									   
										$nombre=mysql_result($hacerConsulta,$contador,"nombre");
										$curso=mysql_result($hacerConsulta,$contador,"curso");
										$horario=mysql_result($hacerConsulta,$contador,"horario");
										$dia=mysql_result($hacerConsulta,$contador,"dia");
										}


}	




$pdf =& new Cezpdf('a4');
$pdf->selectFont('pdf/fonts/Courier.afm');
$datacreator = array (
                    'Title'=>'Ejemplo PDF',
                    'Author'=>'unijimpe',
                    'Subject'=>'PDF con Tablas',
                    'Creator'=>'hugol.soul@gmail.com',
                    'Producer'=>'http://blog.unijimpe.net'
                    );
$pdf->addInfo($datacreator);
 
$data[] = array('nombre'=>$nombre, 'curso'=>$curso, 'horario'=>$horario, 'dia'=>$dia);


$titles = array('nombre'=>'<b>Nombre</b>', 'curso'=>'<b>Curso</b>', 'horario'=>'<b>horario</b>', 'dia'=>'<b>Dia</b>');
//'ApellidoP'=>'<b>Apellido Paterno</b>', 'ApellidoM'=>'<b>Apellido Materno</b>'


$pdf->ezText("<b>IMAM</b>", 25,array('justification'=>'center'));
$pdf->ezText("\n");
$pdf->ezText("\n");
$pdf->ezText("Nombre: ".$nombre." ".$curso." ".$horario. " " .dia. );
$pdf->ezText("\n");
$pdf->ezTable($data,$titles,'',$options );
$pdf->ezText("\n");



$pdf->ezStream();






?>
