<?php
	
	require_once('validacion/validar_login.php');
	
	if(isset($_POST['user']) && isset($_POST['password'])){
		$login = new validar_login();
		$login->validar_login();
	}

?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Citas Medicas</title>
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
		<script type="text/javascript" src="../js/prototype-1.7.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
				</div>
				<div id="login" class="curved_sup_der">
					<form action="registro_satisfactorio.php" method="post">
						<label>Usuario:</label>
						<input type="text" name="user" id="" class="" value="<?php if(isset($_COOKIE['user'])){echo $_COOKIE['user'];}?>"/><br>
						<label>Contrase&ntilde;a:</label>
						<input type="password" name="password" id="" class="" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>"/><br>
						<label>Recordar</label>
						<input type="checkbox" name="remember" id="" class=""/><br>
						<label><a href="logout.php" class="fz11 notextdeco">Cerrar Sesion</a></label>
						<input type="submit" name="entrar" id="" class="fz10" value="Entrar"/><br>
					</form>
				</div>
			</div>
			<div id="contenido">
				<center>
					<h1>En hora buena, "Se ha registrado correctamente".<h1><p>
					<h1>Sus datos de usuario han sido guardados</h1>
					<h3>Debe ingresar al sistema para poder realizar cualquier operacion</h3>
					<h3 class="blue">Para ingresar al sistema instroduzca sus datos en la esquina superior derecha</h3>
				</center>
			</div>
			<div id="footer">
			</div>
		</div>
	</body>
</html>

