<?php

include_once('conexao.php');

$sql1 = "SELECT email, fone, nome, cpf, dt_nasc,cep, rua, bairro, cidade, estado, numero, complemento, referencia FROM tb_clientes WHERE usuario='$logado'";
$resultado1 = $conexao->query($sql1);
foreach ($resultado1 as $dados) {
    $dados['email'];
    $dados['fone'];
    $dados['nome'];
    $dados['cpf'];
    $dados['dt_nasc'];
    $dados['cep'];
    $dados['rua'];
    $dados['bairro'];
    $dados['cidade'];
    $dados['estado'];
    $dados['numero'];
    $dados['complemento'];
    $dados['referencia'];
}

