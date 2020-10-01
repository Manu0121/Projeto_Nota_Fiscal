<!DOCTYPE html>
<html>
<?php 
    include 'cabecalho.php'
?>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <section>
        <div>
            <div class="card">
                <div class="card-danger data">
                    <form action="insere_prod.php" method="POST">
                                        
                                        
                        <label for="text-input">Nome</label>         
                        <input type="text" class="form-control" name="nome">

                        <br><hr>
                                        
                        <label for="text-input">Valor Unit</label>
                        <input type="text" class="form-control" name="precouni">

                        <br><hr>
                                           
                        <input type="submit" class="btn btn-info botao" value="CADASTRAR PRODUTO">
                        <p><a href="index.php" class="btn btn-info data bot">VOLTAR AO INICIO</a></p>
                     </form>  
                </div>
            </div>
        </div>
    </section>                    
</body>
</html>