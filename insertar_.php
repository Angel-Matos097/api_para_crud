<?php
$servername = "localhost";
$database = "bd_pdm_crud_new";
$username = "root";
$password = "";
// Create connection
$conexion = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
} else {echo "Connected successfully";}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

$consulta="INSERT INTO usuarios(nombre,correo,direccion) values('$nombre','$correo','$direccion') ";
$respuesta = mysqli_query($conexion,$consulta);

if($respuesta){
    echo "datos insertados";
}

else {
    echo "no se insertaron datos";
}
mysqli_close($conexion);
?>