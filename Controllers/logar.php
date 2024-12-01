<?php

session_start();

if (empty($_POST['usuario']) && empty($_POST['senha']) or (empty($_POST['usuario']) && !empty($_POST['senha']))) {
    echo "<script>alert('Informe o Usuário e Senha.');</script>";
    echo "<script>location.href='../Views/Login/login.php';</script>";
} else if (!empty($_POST['usuario']) && empty($_POST['senha'])) {
    echo "<script>alert('Informe a Senha.');</script>";
    echo "<script>location.href='../Views/Login/login.php';</script>";
} else if (isset($_POST['entrar']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {

    include_once('../Models/conexao.php');
    $login = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql1 = "SELECT * FROM tb_clientes WHERE usuario = '$login' AND senha = '$senha'";

    $resultado = $conexao->query($sql1);

    if (mysqli_num_rows($resultado) < 1) {
        print "<script>alert('Usuário e/ou Senha incorreto(s).');</script>";
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        echo "<script>location.href='../Views/Login/login.php';</script>";
    } else {

        $_SESSION['usuario'] = $login;
        $_SESSION['senha'] = $senha;
        if (isset($_POST['chkLembrar']) == true) {
            setcookie('vid_jacuipe', $login, strtotime('+1 day'), '/');
        } else {
            setcookie('vid_jacuipe', $login, strtotime('-1 day'), '/');
        }
        echo "<script>location.href='../Views/Cliente/cliente.php';</script>";
    }
} else {
    header('Location: ../Login/login.php');
}