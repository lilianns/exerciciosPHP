<link rel="stylesheet" href="style.css">
<?php
include("conexao.php"); 

$selectSql = "SELECT vetor, vetor2, Naocomuns FROM exercicio18";
$busca = mysqli_query($conexao, $selectSql);

if (mysqli_num_rows($busca) > 0) {
    while ($linha = mysqli_fetch_assoc($busca)) {
        echo '<li class="vetor">Vetor: <span class="vet">' . $linha["vetor"] . '</span><br>';
        echo 'Vetor 2: <span class="vetor2">' . $linha["vetor2"] . '</span><br>';
        echo 'Não comuns: <span class="Ncomuns">' . $linha["Naocomuns"] . '</span><br>';
    }
} else {
    echo "<li>Nenhum registro encontrado.</li>";
}

mysqli_close($conexao);
?>