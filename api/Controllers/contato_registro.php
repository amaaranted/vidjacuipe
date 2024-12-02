<?php
session_start();

if (empty($_POST['txtNomeCompleto']) && empty($_POST['txtEmail']) && empty($_POST['txtMensagem'])) {
    echo "<script>alert('Preencha o formulário completo.');</script>";
    echo "<script>location.href='../Views/Relacionamento/contato.php';</script>";
} else if (!empty($_POST['txtNomeCompleto']) && empty($_POST['txtEmail']) && empty($_POST['txtMensagem'])) {
    echo "<script>alert('Informe seu e-mail e a mensagem que desejar registrar.');</script>";
    echo "<script>location.href='../Views/Relacionamento/contato.php';</script>";
} else if (!empty($_POST['txtNomeCompleto']) && !empty($_POST['txtEmail']) && empty($_POST['txtMensagem'])) {
    echo "<script>alert('Informe a Mensagem.');</script>";
    echo "<script>location.href='../Views/Relacionamento/contato.php';</script>";
} else if (isset($_POST['btnRegistrar']) && !empty($_POST['txtNomeCompleto']) && !empty($_POST['txtEmail']) && !empty($_POST['txtMensagem'])) {

    include_once('../Models/conexao.php');
    $nome1 = $_POST['txtNomeCompleto'];
    $email1 = $_POST['txtEmail'];
    $mensagem1 = $_POST['txtMensagem'];

    $sql7 = "INSERT INTO tb_contato_site(nome_completo,email_contato,mensagem) VALUES('$nome1','$email1','$mensagem1')";

    $resultado7 = $conexao->query($sql7);
    header('Location: ../Views/Relacionamento/confirmcontato.php');
} else {
    header('Location: ../../index.php');
}
