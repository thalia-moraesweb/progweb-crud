<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Produtos | INSERT - CRUD com PHP e MySQL </title>
<link href="../css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Produtos | INSERT -
    <a href="listar.php">Listar</a> - 
    <a href="../index.php">Home</a> </h1>
</div>

<div class="container">
    
    <h2>Utilize o formulário abaixo para cadastrar um produto.</h2>    		
    
	<form action="" method="post">
	    <p>
            <label for="nome">Nome:</label>
	        <input type="text" name="nome" id="nome" required>
        </p>

        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante" required>
                <option value=""></option>

                
                
            </select>
        </p>

        <p>
            <label for="preco">Preço:</label>
	        <input type="number" name="preco" id="preco" min="0" max="10000" step="0.01" required>
        </p>

        <p>
            <label for="quantidade">Quantidade:</label>
	        <input type="number" name="quantidade" id="quantidade" min="0" max="50" step="1" required>
        </p>

	    <p>
            <label for="descricao">Descrição:</label> <br>
	        <textarea name="descricao" id="descricao" rows="3" cols="40" maxlength="500" required></textarea>
        </p>
	    
        <button name="inserir">Inserir produto</button>
	</form>	


</div>

</body>
</html>