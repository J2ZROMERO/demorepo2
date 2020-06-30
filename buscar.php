<?php 
include("conexion1.php");
 mysql_select_db($db,$conexion) or die ("error al conectar la base de datos");


$codigo=$_POST['nombre'];;
$registros=mysql_query("SELECT * FROM alumnos where nombre='$codigo'") or ("error  en consulta".mysql_error());


while ($registros = mysql_fetch_array($registros)) {
	echo $registros['nombre'];


 ?>