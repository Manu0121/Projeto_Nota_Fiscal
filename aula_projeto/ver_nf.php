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
						<h1>Notas Fiscais</h1>
					</div class="container-fluid">
					<br>
						<?php

						    include 'conecta.php';

						    $consulta = "SELECT * FROM nota_fiscal";

						    foreach ($conexao -> query($consulta) as $linha){
						            echo "<br>NF: ".$linha['codnf'] ."<br>";
						            echo "Data: ".$linha['data'] ."<br>";
						            echo "Valor total:".$linha['total'] ."<br>";

						            $nota = $linha['codnf'];
						            $consulta2 = "SELECT * FROM itens_nf WHERE num_nf = '$nota'";
						            foreach ($conexao -> query($consulta2) as $linha2) {
						                echo "ID: ".$linha2['coditens'] ." - ";
						                echo "Cod. Produto: ".$linha2['codprod'] ." - ";
						                $codigo = $linha2['codprod'];
						                $consulta3 = "SELECT * FROM  produtos WHERE codprod = '$codigo'";
						                foreach ($conexao -> query($consulta3) as $linha3) {
						                    echo "Nome: ".$linha3['nome'] ." - ";
						                    echo "Valor Unit R$: ".$linha3['precouni'] ." - ";

						                }
						                

						                echo "Qtde: ".$linha2['qtde'] ." - ";
						                echo "Subtotal R$: ".$linha2['total'] ."<br>";

						                }  
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