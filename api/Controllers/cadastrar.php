<?php

include('../Models/conexao.php');

if (isset($_POST['btnCadastrar'])) {

    include_once('../Models/conexao.php');

    $nome = $_POST['txtNome'];
    $cpf2 = $_POST['txtCPF'];
    $cpf = str_replace(['.', '-'], ['', ''], $cpf2);
    $fone2 = $_POST['txtTelefone'];
    $fone = str_replace(['(', ')', ' ', '-'], ['', '', '', ''], $fone2);
    $dtnasc = $_POST['txtDataNasc'];
    $email = $_POST['txtEmail'];
    $cep2 = $_POST['txtCEP'];
    $cep = str_replace(['.', '-'], ['', ''], $cep2);
    $rua = $_POST['txtRua'];
    $bairro = $_POST['txtBairro'];
    $cidade = $_POST['txtCidade'];
    $estado = $_POST['txtEstado'];
    $numero = $_POST['txtNumero'];
    $complemento = $_POST['txtComplemento'];
    $referencia = $_POST['txtReferencia'];
    $usuario = $_POST['txtUsuario'];
    $senha = $_POST['txtSenha'];

    $sql = "SELECT cpf, email, fone, usuario FROM tb_clientes WHERE cpf = '$cpf' OR email = '$email' OR fone = '$fone' OR usuario = '$usuario'";

    if ($result = mysqli_query($conexao, $sql)) {

        $rowcount = mysqli_num_rows($result);

        if ($rowcount < 1) {

            $sql2 = "INSERT INTO tb_clientes(nome,cpf,dt_nasc,email,fone,cep,rua,bairro,cidade,estado,numero,complemento,referencia,usuario,senha) VALUES('$nome','$cpf','$dtnasc','$email','$fone','$cep','$rua','$bairro','$cidade','$estado','$numero','$complemento','$referencia','$usuario','$senha')";
            $result2 = $conexao->query($sql2);
            echo "<script>alert('Cadastro realizado com sucesso.');</script>";
            echo "<script>alert('Faça o login e aproveite nossos produtos.');</script>";
            echo "<script>location.href='../Views/Login/login.php';</script>";
        }
    } else {

        echo "<script>alert('Tente o cadastro com novos dados.');</script>";
        echo "<script>location.href='../Views/Login/cadastro.php';</script>";
        
    }
}
