<?php
if(isset($_POST["cui"]) && isset($_POST["fecha"]) && isset($_POST["clave"])){
	$cui = $_POST["cui"];
	$fecha = $_POST["fecha"];
	$clave = $_POST["clave"];
	$servername = "localhost";
	$username = "bmazariegos";
	$password = "bmazariegos";
	
	$conn = mysqli_connect($servername, $username, $password);

	if (!$conn) {
    		die("Fallo conectarse por: " . mysqli_connect_error());
	}

	$sql = "SELECT cui,clave FROM bmazariegos.usuario1 where cui = '".$cui."' and fecha = '".$fecha."' and clave = '".md5($clave)."';";


	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		session_start();
		$_SESSION["cui"]=$cui;
		if ($result) {
		}
	}else{
		echo "No se logro iniciar sesion";
	}
	$conn->close();
} 
?>
<!doctype html>
<html>
<head>
<title>Formulario de registro </title>
</head>
<body>
<?php
if(isset($_SESSION["cui"])){
?>
<h1>Sesion iniciada</h1>
<?php
}
else{
?>
<form action="sesion.php" method="POST">
<label for="cui">Usuario</label>
<input type="text" name="cui" required/>
<label for="fecha">Fecha</label>
<input type="text" name="fecha" required/>
<label for="clave">Clave</label>
<input type="password" name="clave" required/>
<input name="enviar" type="submit" value="acceder"/>
</form>
<?php
}
?>
</body>
</html>

