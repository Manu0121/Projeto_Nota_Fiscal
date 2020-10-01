
 <!DOCTYPE html>
 <html>
 <?php 
	include 'cabecalho.php'; 
 ?>
 <head>
 	<title>Produtos</title>
 </head>
 <body>
 	<section>
		<div>
			<div class="list-group-item">
				<div class="list-group-item centro">
					<div class="card-header data">
						<h1>Produtos Cadastrados</h1>
					</div class="container-fluid">
					<br>
				 	<?php 

						include 'conecta.php';

						$consulta="SELECT * FROM produtos";

						foreach ($conexao -> query($consulta) as $linha) {
							echo "Produtos: ".$linha['codprod']."<br><hr>";
							echo "Nome: ".$linha['nome']."<br><hr>";
							echo "Valor Unit: ".$linha['precouni']."<br><hr>";

									echo "<hr>";
						}
									echo "<br>";

				 	?>
				</div>
			</div>
		</div>
	</section>

 	<p><a href="index.php" class="btn btn-info data bot btn-lg">VOLTAR AO INICIO</a></p>

 </body>
 </html>
