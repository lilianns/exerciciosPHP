<?php
//conectando com o banco

$dbHost = 'database';
$dbUser = 'user_lilian';
$dbPassword = 'senha';
$dbName = 'titans';

$conexao = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo "Erro:".$conexao->connect_error;
} else {
    echo "<p>Conexão efetuada com sucesso</p>";
}

    // Limpa a tabela antes de inserir novos valores
    $conexao->query("TRUNCATE TABLE exercicio11");

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        $conexao->query("INSERT INTO exercicio11 (numero, tabuada) VALUES ('$numero', '$resultado')");
    }

$conexao->close();
?>
