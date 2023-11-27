<?php

$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "";
$dbname = "bosquedoslivros";

$conexao = new mysqli($servidor, $dbusuario, $dbsenha, $dbname);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

?>