<link rel="stylesheet" href="style.css">
<?php
include("conexao.php"); 

$selectSql = "SELECT vetor1, maior, menor, media, pares FROM exercicio17";
$busca = mysqli_query($conexao, $selectSql);

if (mysqli_num_rows($busca) > 0) {
    while ($linha = mysqli_fetch_assoc($busca)) {
        echo '<li class="vetor">Vetor: <span class="vet">' . $linha["vetor1"] . '</span><br>';
        echo 'Maior valor: <span class="maior">' . $linha["maior"] . '</span><br>';
        echo 'Menor valor: <span class="menor">' . $linha["menor"] . '</span><br>';
        echo 'Média: <span class="media">' . $linha["media"] . '</span><br>';
        echo 'Percentual de pares: <span class="pares">' . $linha["pares"] . ' % </span></li>';
    }
} else {
    echo "<li>Nenhum registro encontrado.</li>";
}

mysqli_close($conexao);
?>