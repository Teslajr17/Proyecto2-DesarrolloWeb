<?php
$cui = $_POST["cui"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$fecha = $_POST["fecha"];
$grupo = $_POST["grupo"];
$clave = $_POST["clave"];

$servername = "localhost";
$username = "bmazariegos";
$password = "bmazariegos";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
die("Fallo conectarse por: " . mysqli_connect_error());
}

$sql = "insert into bmazariegos.usuario1(cui,apellido1,nombre1,fecha,grupo,clave) values('".$cui."','".$apellido."','".$nombre."','".$fecha."','".$grupo."','".md5($clave)."');";
if ($conn->query($sql) === TRUE) {
}
$conn->close();
?>
