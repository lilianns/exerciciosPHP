<?php
include("conexao.php");

function ParOuImpar($numero) {
    if ($numero % 2 == 0) {
        return 'par';
    } else {
        return 'ímpar';
    }
}

$numerosString = $_POST['numeros'];

$numeros = explode(',', $numerosString);

$resposta = '';

for ($i = 0; $i < count($numeros); $i++) {
    $resposta .= "O número {$numeros[$i]} é " . ParOuImpar($numeros[$i]) . ".<br>";
}

echo $resposta;

$numerosString = implode(',', $numeros);

$sql = "INSERT INTO exercicio16(numeros, resposta) 
        VALUES ('$numerosString', '$resposta')"; 
mysqli_query($conexao, $sql); 

mysqli_close($conexao); 
?>
