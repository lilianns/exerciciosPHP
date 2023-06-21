<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 6</title>
</head>

<body>
    <form action="" method="get">
        <label>Informe 1 número inteiro entre 1 e 12 para ser exibido o mês correspondente:</label>
        <input type="text" id="num" name="num">
        <input type="submit" value="Enviar">
    </form>

<?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];
        
        $meses = [
            1 => 'janeiro',
            2 => 'fevereiro',
            3 => 'março',
            4 => 'abril',
            5 => 'maio',
            6 => 'junho',
            7 => 'julho',
            8 => 'agosto',
            9 => 'setembro',
            10 => 'outubro',
            11 => 'novembro',
            12 => 'dezembro'
        ];

        if ($num >= 1 && $num <= 12) {
            echo "<div class='result'>O número $num corresponde ao mês de " . $meses[$num] . ".</div>";
        } else {
            echo "<div class='result'>Não existe mês correspondente para o número informado.</div>";
        }
    }
    ?>
</body>
</html>
