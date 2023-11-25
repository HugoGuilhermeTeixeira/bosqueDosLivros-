<?php

$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "";
$dbname = "bosquedoslivros";

$mysqli = new mysqli($servidor, $dbusuario, $dbsenha, $dbname);

if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

?>