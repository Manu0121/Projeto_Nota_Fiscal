<?php 

	include 'conecta.php';
?>

<!DOCTYPE html>
<html>
<?php 
	include 'cabecalho.php'
?>
<head>
	<meta charset="utf-8">
	<title>Data Nota Fiscal</title>
</head>
<body>
	<section>
		<div>
			<div class="card">
				<div class="card-danger">
					<div class="card-header data">
						<h1>Data da Venda</h1>
					</div class="container-fluid">
						<form class="data" action="gera_nf.php" method="POST">
							<div class="form-group">
								<p>Insira a Data da Venda</p>
								Data: <input type="date" name="data">
							</div>
							<hr>
							<div class="form-group">
								<input type="submit" class="btn btn-info" value="CONTINUAR">
							</div>
						</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>