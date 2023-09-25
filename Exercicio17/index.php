<?php
include("conexao.php");

if (isset($_POST["vetor1"])) {
    $vetor = $_POST["vetor1"];

    $maior = $vetor[0];
    $menor = $vetor[0];
    $totalPares = 0;
    $somaElementos = 0;

    $count = count($vetor);

    for ($i = 0; $i < $count; $i++) {
        $elemento = $vetor[$i];
    
        if (!is_numeric($elemento)) {
            continue;
        }
    
        $elemento = floatval($elemento); 
        if ($elemento > $maior) {
            $maior = $elemento;
        }
    
        if ($elemento < $menor) {
            $menor = $elemento;
        }
    
        if ($elemento % 2 == 0) {
            $totalPares++;
        }
    
        $somaElementos += $elemento;
    }
    

    $percentualPares = ($totalPares / count($vetor)) * 100;
    $media = $somaElementos / count($vetor);
}

    $resultado = "Maior valor: " . $maior . "<br>" .
                 "Menor valor: " . $menor . "<br>" .
                 "Percentual de números pares: " . $percentualPares . "%<br>" .
                 "Média dos elementos: " . $media . "<br>";

    echo $resultado;


    $vetorStr = implode(', ', $vetor);

    $sql = "INSERT INTO exercicio17(vetor1, maior, menor, media, pares) 
    VALUES ('$vetorStr', $maior, $menor, $media, $percentualPares)"; 
    mysqli_query($conexao, $sql);

    mysqli_close($conexao); 

?>
