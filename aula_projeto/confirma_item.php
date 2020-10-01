<!DOCTYPE html>
<html>
<?php 
	include 'cabecalho.php'
?>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<section>
		<div>
			<div class="card">
				<div class="card-danger data">
					<?php 

						include 'conecta.php';
						echo "<br>";

						//terceira aparição
						session_start();
						$nf = $_SESSION['codnf'];

						$consulta= "SELECT * FROM itens_nf WHERE codnf = '$nf' ";

						//echo "<h1> NF: ".$nf."</h1> <br> <hr>";
						$total = 0;

						foreach ($conexao -> query($consulta) as $linha) {
							echo "Cod Produto: ".$linha['codprod']."<br>";
							echo "Qtde: ".$linha['qtde']."<br>";
							echo "subtotal: ".$linha['subtotal']."<br>";

							$total=$total + $linha['subtotal'];

							echo "<hr>";
						}

						echo "<b>TOTAL DA NOTA R$ ".$total."<br><hr>";
					 ?>
				

	 <p>O Que Deseja Fazer?</p>
	 <p><a href="seleciona_ultima_nf.php" class="btn btn-info">INSERIR OUTRO PRODUTO</a>
	 <br>
	 <p><a href="finalizar.php?total=<?php echo $total; ?>" class="btn btn-info">FINALIZAR NOTA FISCAL</a></p>
	 			</div>
			</div>
		</div>
	</section>
</body>
</html>