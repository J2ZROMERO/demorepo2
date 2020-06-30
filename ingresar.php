<!DOCTYPE html>
<html>
<head>

	<title>CONFIRMACION</title>
	<style>
		body,html{
margin: 0;
width: 100vh;
height: 100vh;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;

text-align: center;
font-family: sans-serif;
font-size: 50px;
background-color: #EB3D3D;
		}

	</style>

</head>
<body>

<?php 


$usuario =$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$pweb=$_POST['enviar'];
$tabla="datoo";


$conexion =mysqli_connect("","root","","usuario",3307) or die("no se encuentra el servidor");


if (isset($pweb) ) {
$resultado="SELECT * FROM $tabla ";
$union=mysqli_query($conexion,$resultado);


while ($consulta = mysqli_fetch_array($union,MYSQLI_ASSOC)) {



if ($consulta['nombre']==$usuario && $consulta['contrasena']==$contrasena) {
header("Location:https://sites.google.com/view/optimizacionmantenimiento-jose/p%C3%A1gina-principal");

}else{
	echo "  lo siento nesestas registrarte 
	 ";	echo "  
	<a href='3parcial.html'> <br><br>REGISTRO</a> <br><a href='iniciosesion.html'> <br><br>MENU</a> ";
break;
}}}

if (isset($_POST['registrar'])) {

header("Location:3parcial.html");

}

 ?>

</body>
</html>
