<?php

$dbHost = 'database';
$dbUser = 'user_lilian';
$dbPassword = 'senha';
$dbName = 'titans';

$conexao = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo "Erro:".$conexao->connect_error;
} else {
    echo "Conexão efetuada com sucesso";
}

?>