<?php

$sevidor = "localhost";
$dbusuario = "root";
$dbsenha = "";
$dbname = "bosqueDosLivros";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);

?>