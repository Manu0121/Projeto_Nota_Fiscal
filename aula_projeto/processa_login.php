<?php
	session_start();
	
	include 'conecta.php';

	$email=$_POST['email'];
	$senha=$_POST['senha'];

	$consulta="SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";


	$resultado= $conexao -> query($consulta);
	$registros= $resultado ->num_rows;

	//Para a variável de sessão: id, nome, nivel e email

	$registro_usuario= mysqli_fetch_assoc($resultado);
	//print_r($registro_usuario);

	if ($registros == 1) {

		$_SESSION['codusu'] = $registro_usuario['codusu'];
		$_SESSION['nome'] = $registro_usuario['nome'];
		$_SESSION['email'] = $registro_usuario['email'];
		$_SESSION['senha'] = $registro_usuario['senha'];

		header('Location: index.php');
	}

	else{

		header('Location: index_login.php');
	}





?>