<?php 
	include 'conecta.php';
    echo "<br>";
    
    session_start();
    
	$nf=$_SESSION['codnf'];
	$id_prod= $_POST['codprod'];
	$qtde= $_POST['qtde'];
	$subtotal=$_POST['subtotal'];

	echo "NF-> ". $nf . "<br>";
	echo "ID_PRODUTO -> " .$id_prod . "<br>";
	echo "QTDE -> " .$qtde . "<br>";
	echo "SUBTOTAL -> " . $subtotal . "<br>";

	$consulta =$conexao -> prepare(
        "INSERT INTO `itens_nf`(`codprod`, `codnf`, 
        `qtde`, `subtotal`) VALUES ('$id_prod','$nf',
        '$qtde','$subtotal')");
	
	
	$consulta -> execute();
	header('Location: confirma_item.php');




?>