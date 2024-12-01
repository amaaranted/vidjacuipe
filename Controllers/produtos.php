<?php

include_once('../Models/conexao.php');

$sql = "SELECT id, capa, nome, descricao, preco, quantidade_estoque FROM produtos";
$products = $conexao->query($sql);
foreach ($products as $product) :
    $product['id'];
    $product['capa'];
    $product['nome'];
    $product['descricao'];
    $product['preco'];
    $product['quantidade_estoque'];
endforeach;

$id = $product['id'];
$capa = $product['capa'];
$nome = $product['nome'];
$descricao = $product['descricao'];
$preco = $product['preco'];
$quantidade = $product['quantidade_estoque'];
