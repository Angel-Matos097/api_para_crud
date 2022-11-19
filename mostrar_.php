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
}
echo "Connected successfully";

$result = array();
$result['datos']=array();
$consulta="SELECT *FROM usuarios";
$respuesta = mysqli_query($conexion,$consulta);


while($row = mysqli_fetch_array($respuesta)){

    $index['id']= $row['0'];
    $index['nombre']= $row['1'];
    $index['correo']= $row['2'];
    $index['direccion']= $row['3'];

    array_push($result['datos'],$index);
}

$result["exito"]="1";
echo json_encode($result);

mysqli_close($conexion);
?>