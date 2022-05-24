<?php
require '../includes/funcoes-fabricantes.php';
require '../includes/funcoes-produtos.php';
$listaDeFabricantes = lerFabricantes($conexao);
$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$produto = lerumProduto($conexao, $id);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Produtos | UPDATE - CRUD com PHP e MySQL </title>
<link href="../css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Produtos | SELECT e UPDATE -
    <a href="listar.php">Listar</a> - 
    <a href="../index.php">Home</a> </h1>
</div>

<div class="container">
    <h2>Utilize o formulário abaixo para atualizar os dados de um produto.</h2>
    
    <form action="" method="post"> 
        
        <p><label for="nome">Nome:</label>
	    <input value=" <?=$produto['nome']?>"type="text" name="nome" id="nome" required></p>

     


        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante" required>
                <option value=""></option>
                
                <?php foreach($listaDeFabricantes as $fabricante){ ?>
                <option
                 <?php 
                 if($produto['fabricante_id'] == $fabricante['id']) {
                 echo "selected" ;
                }?>
                 value= "<?=$fabricante['id']?>">
                <?=$fabricante['nome']?>
                </option>
                <?php } ?>
                
                </option>
            
            </select>
        </p>


        <p><label for="preco">Preço:</label>
	    <input value="<?=$produto['preco']?>" type="number" name="preco" id="preco" min="0" max="10000" step="0.01" required></p>

        <p><label for="quantidade">Quantidade:</label>
	    <input value="<?=$produto['quantidade']?>"type="number" name="quantidade" id="quantidade" min="0" max="50" step="1" required></p>
        
	    <p><label for="descricao">Descrição:</label> <br>
	    <textarea name="descricao" id="descricao" rows="3" cols="40" maxlength="500" required><?=$produto['descricao']?></textarea>
        </p>
	    

        <button name="atualizar">Atualizar produto</button>
	</form>	   
</div>

</body>
</html>