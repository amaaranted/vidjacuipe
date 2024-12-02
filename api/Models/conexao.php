<?php

$host = "vidjacuipe.c3cseuu2umyt.us-east-1.rds.amazonaws.com";
$bd = "bd_vid_jacuipe";
$usuario = "uninassau";
$senha = "uninassau";

$conexao = new mysqli($host, $usuario, $senha, $bd);

/* $host = "localhost";
$bd = "bd_vid_jacuipe";
$usuario = "root";
$senha = "";

$conexao = new mysqli($host, $usuario, $senha, $bd);
if ($conexao -> connect_errno) {
    die ("Falha ao conectar: (" . $mysqli -> connect_errno . ") " . $mysqli -> connect_error);
} */