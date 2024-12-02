<?php
session_start();
$usuario = (isset($_COOKIE['vid_jacuipe'])) ? $_COOKIE['vid_jacuipe'] : '';
if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
} else {
    $logado = $_SESSION['usuario'];
}