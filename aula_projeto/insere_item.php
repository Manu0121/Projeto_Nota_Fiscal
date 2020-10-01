<!DOCTYPE html>
<html>
<?php 
	include 'cabecalho.php'
?>
<head>
	<meta charset="utf-8">
	<title>ITENS DA NOTA FISCAL</title>
</head>
<body>
	 <section>
		<div>
			<div class="card">
				<div class="card-danger data">
					<?php 

						include 'conecta.php';
						echo "<br>";

						//primeira aparição
						session_start();
						$nf=$_SESSION['codnf'];
						echo "<b> Número da NF: ".$nf."</b><br>";

						$id_prod=$_POST['codprod'];
						$qtde_prod=$_POST['qtde'];


						$consulta= "SELECT precouni,nome FROM produtos WHERE codprod='$id_prod'";
						$consulta= $conexao -> query($consulta);
						$linha = $consulta -> fetch_assoc();

						//print_r($linha);

						$preco=$linha['precouni'];
						$nome=$linha['nome'];

						$subtotal= $preco*$qtde_prod;

					 ?>
					 <form action="insere_item_nf.php" method="POST">
					 	<br>
					 	<p>
					 		ID Produto: <input type="text" name="codprod" value="<?php echo $id_prod; ?>" readonly="readonly" class="form-control">
					 	</p>
					 	<p>
					 		Produto: <input type="text" name="nome" value="<?php echo $nome; ?>" readonly="readonly" class="form-control">
					 	</p>
					 	<p>
					 		Valor Unitário: <input type="text" name="precouni" value="<?php echo $preco; ?>" readonly="readonly" class="form-control">
					 	</p>
					 	<p>
					 		Quantidade: <input type="text" name="qtde" value="<?php echo $qtde_prod; ?>" readonly="readonly" class="form-control">
					 	</p>
					 	<p>
					 		Subtotal: <input type="text" name="subtotal" value="<?php echo $subtotal; ?>" readonly="readonly" class="form-control">
					 	</p>

					 	<div class="form-group">
					 		<input type="submit" class="btn btn-info" value="ADICIONAR PRODUTO">
					 	</div>
					 </form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>