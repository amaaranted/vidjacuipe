<?php
session_start();
$login = $_SESSION['usuario'];
unset($_SESSION['usuario']);
unset($_SESSION['senha']);
session_unset();
session_destroy();
//setcookie('vid_jacuipe', $login, strtotime('-1 day'), '/');
header('Location: ../Views/Login/login.php');
