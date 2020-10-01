<?php

	session_start();

		if ((!isset($_SESSION['id'])== true) && (!isset($_SESSION['nome'])== true) && (!isset($_SESSION['email'])== true) && (!isset($_SESSION['nivel'])== true)) {

			header('Location: index_login.php');
		}
?>

<!DOCTYPE html>
<html>
<?php 
	include 'cabecalho.php'
?>
	<section>
		<div class="container">
			<div >
				<div class="card-header data">
					<h1>INICIAR UMA NOVA VENDA</h1>
				</div>
					<br>
					<ul>
						<li class="list-group-item centro">Ao clicar em <b>Iniciar Venda</b>, o sistema irá gerar uma nova nota fiscal na tabela nota_fiscal sem o valor total.</li>
						<li class="list-group-item centro">Na próxima tela será solicitada a data NF.</li>
						<li class="list-group-item centro">O valor total será atualizado após a inserção dos itens de nota fiscal.</li>
						<hr>
					</ul>
						<form class="data botao" action="data_nf.php" method="POST">
							<input type="submit" class="btn btn-info btn-lg" value="Iniciar Venda" >
					</form>
			</div>
		</div>
	</section>
	<section>
		<br><
		<div class="container">
			<div class="card-header data">
				<h1 class="centro data">OUTRAS OPÇÕES</h1>
			</div>
			<br>
				<div class="row">
					<div >
						<a href="ver_nf.php"><img src="img/nota.png"></a>
						<!--<p class="centro"><a href="ver_nf.php">VER NOTAS EMITIDAS</a></p>-->
					</div>
					<div >
						<a href="ver_prod.php"><img src="img/prod.png"></a>
						<!--<p><a href="ver_prod.php">VER PRODUTOS</a></p>-->
					</div>
					<div >
						<a href="cadastro_prod.php"><img src="img/cad.png"></a>
						<!--<p><a href="cadastro_prod.php">CADASTRAR PRODUTOS</a></p>-->
					</div>
					<div >
						<a href="index_login.php"><img src="img/sair.png"></a>
						<!--<p><a href="index_login.php">SAIR</a></p>-->
					</div>
		</div>
	</section>
</body>
</html>