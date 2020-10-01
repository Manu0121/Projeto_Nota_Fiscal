

<?php

	session_start();

		if ((!isset($_SESSION['id'])== true) && (!isset($_SESSION['nome'])== true) && (!isset($_SESSION['email'])== true) && (!isset($_SESSION['nivel'])== true)) {

			header('Location: index_login.php');
		}
?>






<!DOCTYPE html>
<html>
<?php 
include 'cabecalho.php';
 ?>
<head>
	<title>Página Restrita</title>
</head>
<body>
	<h1>Seja bem-vindo à área restrita</h1>

	<a href="logout_login.php">Sair</a>
	<a href="index.php">Entrar no sistema</a>
</body>
</html>