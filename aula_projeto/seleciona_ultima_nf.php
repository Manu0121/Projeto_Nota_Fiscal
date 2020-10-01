
 <!DOCTYPE html>
 <html>
 <?php 
 	include 'cabecalho.php';
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

						$consulta="SELECT MAX(codnf) AS ultima FROM nota_fiscal";
						$consulta=$conexao -> query($consulta);
						$linha=$consulta -> fetch_assoc(); 
						$ultimo=$linha['ultima'];


						echo "Nota Fiscal:".$ultimo."<br>";
						echo "<hr>";

						session_start();
						$_SESSION['codnf']=$ultimo; 

					 ?>

					 	<form action="insere_item.php?nf='<?php echo '$ultimo'; ?>'"  method="POST">
					 		NF: <input type="text" name="codnf" value="<?php echo '$ultimo'; ?>" class="form-control">
					 		<br>
					 		<p>
					 			Produto:
					 			<select name="codprod" id="codprod" class="form-control">
					 			<?php 
					 				$consulta = "SELECT * FROM produtos";
					 				foreach ($conexao -> query($consulta) as $linha) {
					 			?> 
					 					<option value="<?php echo $linha['codprod']; ?>"><?php echo $linha['nome']; ?></option>
					 			<?php 
					 				}
					 			 ?>
					 			</select>
					 		</p>
					 		<p>
					 			Qtde: <input type="text" name="qtde" class="form-control">
					 		</p>
					 		<hr>
					 		<div class="botao">
					 			<input type="submit" class="btn btn-info" value="ADICIONAR">
					 		</div>
					 		

					 	</form>
				</div>
			</div>
		</div>
	</section>
 </body>
 </html>