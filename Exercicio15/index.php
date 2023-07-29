<?php
function calculoTempo($massaInicial, $massaLimite) {
    $tempo = 0;

    while ($massaInicial >= $massaLimite) {
        $massaInicial = $massaInicial * 0.75; 
        $tempo = $tempo + 30;
    }

    return $tempo;
}

if (isset($_POST['massaInicial']) && isset($_POST['massaLimite'])) {
    $massaInicial = floatval($_POST['massaInicial']);
    $massaLimite = floatval($_POST['massaLimite']);

    $tempoNecessario = calculoTempo($massaInicial, $massaLimite);

    echo $tempoNecessario;

    include("conexao.php");
    $sql = "INSERT INTO exercicio15(massaInicial, massaLimite, tempo) 
            VALUES ('$massaInicial', $massaLimite, $tempoNecessario)";
    mysqli_close($conexao); 
}
?>
