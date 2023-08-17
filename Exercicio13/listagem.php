<link rel="stylesheet" href="style.css">
<?php
include("conexao.php"); 

$selectSql = "SELECT numeros, resultado FROM exercicio13";
$busca = mysqli_query($conexao, $selectSql);

if (mysqli_num_rows($busca) > 0) {
    while ($linha = mysqli_fetch_assoc($busca)) {
        echo '<li class="ex"> Números Digitados ' . $linha["numeros"] . ' </br>';
        echo 'Quantos números digitados entre 100 e 200: ' . $linha["resultado"] . '</li> </br>';
    }
} else {
    echo "<li>Nenhum registro encontrado.</li>";
}

mysqli_close($conexao);
?>