<link rel="stylesheet" href="style.css">
<?php
include("conexao.php"); 

$selectSql = "SELECT massaInicial, massaLimite, tempo FROM exercicio15";
$resultado = mysqli_query($conexao, $selectSql);

if (mysqli_num_rows($resultado) > 0) {
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo '<li class="inicial">Massa Inicial: <span class="massaInicial">' . $linha["massaInicial"] . '</span>';
        echo 'Massa Limite: <span class="massaLimite">' . $linha["massaLimite"] . '</span>';
        echo '<span class="tempo">Tempo:' . $linha["tempo"] . '</span></li>';
    }
} else {
    echo "<li>Nenhum registro encontrado.</li>";
}

mysqli_close($conexao);
?>