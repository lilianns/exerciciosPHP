<link rel="stylesheet" href="style.css">
<?php
include("conexao.php"); 

$selectSql = "SELECT altura_chico, altura_juca, crescimento_chico, crescimento_juca, anos FROM exercicio14";
$busca = mysqli_query($conexao, $selectSql);

if (mysqli_num_rows($busca) > 0) {
    while ($linha = mysqli_fetch_assoc($busca)) {
        echo '<li class="ex">Altura Chico: ' . $linha["altura_chico"] . ' cm </br>';
        echo 'Altura Juca: ' . $linha["altura_juca"] . ' cm </br>';
        echo 'Crescimento Chico: ' . $linha["crescimento_chico"] . ' cm <br>';
        echo 'Crescimento Juca: ' . $linha["crescimento_juca"] . ' cm <br>';
        echo 'Anos: ' . $linha["anos"] . '</li>';
    }
} else {
    echo "<li>Nenhum registro encontrado.</li>";
}

mysqli_close($conexao);
?>