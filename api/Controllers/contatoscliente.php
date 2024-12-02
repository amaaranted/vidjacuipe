<?php

include_once('../../Models/conexao.php');
$sql8 = "SELECT email FROM tb_clientes WHERE usuario='$logado'";
$resultado9 = $conexao->query($sql8);
foreach ($resultado9 as $contatos3) {
    $contatos3['email'];
}
$email_contato = $contatos3['email'];
$sql9 = "SELECT nome_completo,email_contato,mensagem FROM tb_contato_site WHERE email_contato='$email_contato'";
$resultado10 = $conexao->query($sql9);
 