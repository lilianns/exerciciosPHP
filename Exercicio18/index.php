<?php
include("conexao.php");

$numerosNaoComuns = [];
if (isset($_POST["numeros"]) && isset($_POST["numeros2"])) {
    $numeros = $_POST["numeros"];
    $numeros2 = $_POST["numeros2"];
    $vetor = explode(",", $numeros);
    $vetor2 = explode(",", $numeros2);


    if ($vetor === $vetor2) {
        echo "Os vetores são idênticos, todos os números são iguais.";
    } else {
    
    for ($i = 0; $i < count($vetor); $i++) {
        if (!in_array($vetor[$i], $vetor2)) {
            $numerosNaoComuns[] = $vetor[$i];
        }
    }

    for ($i = 0; $i < count($vetor2); $i++) {
        if (!in_array($vetor2[$i], $vetor)) {
            $numerosNaoComuns[] = $vetor2[$i];
        }
    }

    $numerosNaoComuns = array_unique($numerosNaoComuns);
     $resultado = "Números não comuns aos dois vetores: ";
    for ($i = 0; $i < count($numerosNaoComuns); $i++) {
        $resultado .= $numerosNaoComuns[$i] . " ";
    }

    echo $resultado;
    $NaoComuns = implode(', ', $numerosNaoComuns);
} 
}


$vetorStr = implode(', ', $vetor);
$array2 = implode(', ', $vetor2);
$NaoComuns = implode(', ', $numerosNaoComuns);

$sql = "INSERT INTO exercicio18(vetor, vetor2, NaoComuns) 
    VALUES ('$vetorStr', '$array2', '$NaoComuns')"; 

if (mysqli_query($conexao, $sql)) {
} else {
    echo "Erro ao inserir registro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
