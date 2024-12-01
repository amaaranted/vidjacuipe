<?php
if (isset($_SESSION['usuario']) and !empty($_SESSION['usuario']) and (isset($_SESSION['senha']) and !empty($_SESSION['senha']))) {
    if ($logado === "admin") {
        include_once('navbaradministrador.php');
    } else {
        include_once('navbarconectado.php');
    }
} else {
    include_once('navbarnaoconectado.php');
}
