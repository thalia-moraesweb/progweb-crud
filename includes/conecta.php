<?php

//Parâmetros do servidor de BANCO DE DADOS
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas_thalia";

//Conectando ao servidor
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

//Habilitando o suporte ao charset utf8
mysqli_set_charset($conexao, "utf8");

/*Teste (provisório)
if($conexao){
    echo "Tudo ok";
}*/
?>