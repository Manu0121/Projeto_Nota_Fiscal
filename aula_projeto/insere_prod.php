<?php 
	include 'conecta.php';
    echo "<br>";
    
    session_start();
    
	$nome=$_POST['nome'];
	$precouni= $_POST['precouni'];

	echo "Nome-> ". $nome . "<br>";
	echo "Valor Unit -> " .$precouni . "<br>";

	$consulta =$conexao -> prepare(
        "INSERT INTO `produtos`(`nome`, `precouni` 
         ) VALUES ('$nome','$precouni')");
	
	
	$consulta -> execute();
	header('Location: index.php');




?>
