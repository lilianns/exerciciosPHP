<link rel="stylesheet" href="style.css">
<?php
include("conexao.php"); 

$selectSql = "SELECT numeros, resposta FROM exercicio16";
$resultado = mysqli_query($conexao, $selectSql);

if (mysqli_num_rows($resultado) > 0) {
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo '<li class="num">Número: <span class="numero">' . $linha["numeros"] . '</span><br>';
        echo '<span class="resposta">' . $linha["resposta"] . '</span></li>';

    }
} else {
    echo "<li>Nenhum registro encontrado.</li>";
}

mysqli_close($conexao);
?>
