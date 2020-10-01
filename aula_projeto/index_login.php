<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo_login.css">
	<link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
</head>
<body>
	<div class="login">
		<!--<img src="img/compras.jpg" class="usu" width="100" height="100" alt="compras">-->
		<h1>Sistema de compras</h1>
		

		<form action="processa_login.php" method="post">
		<p>Digite o seu email: </p><input type="text" name="email"><br>
		<p>Digite a sua senha: </p><input type="text" name="senha"><br>
		<br>
		<input type="submit" value="LOGIN">
	</form>
	</div>

	
</body>
</html>