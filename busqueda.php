
<?php

$mysqli= new mysqli("localhost","root","");


$salida="";
$query="SELECT * FROM  usuarios ORDER BY id_usuario";

if (isset($_POST['consulta'])) {
	
$q=$mysqli-> real_escape_string($_POST['consulta']);
$query="SELECT NombreCompleto,Nick,Correo FROM usuarios WHERE  NombreCompleto LIKE '%".$q."%' OR  Nick '%".$q."%' OR  LIKE '%".$q."%'";

}



$resultado=$mysqli->query($query);
if ($resultado->num_rows>0) {
	 
$salida.="<table class='tabla_datos'>
<thead>
<tr>
<td>ID </td>
<td>nombre </td>
<td>nikcanme </td>
<td> correo</td>

</tr>
</thead>
<tbody>";



while ($fila=$resultado->fetch_assoc()) {
	$salida.="<tr>
<td>".$fila['id_usuario']."</td>
<td>".$fila['nombre']."</td>

<td>".$fila['Nick']."</td>
<td>".$fila['correo']."</td>

</tr>";
}
$salida.="</tbody></table>"


}else{
$salida.="no hay dato";

}
echo $salida;
$mysqli->close();



?>
