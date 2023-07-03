<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=drive-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 11</title>
</head>

<body>
    <form action="" method="get">
        <label>Informe um número para saber a tabuada:</label>
        <input type="number" id="numero" name="numero">
        <input type="submit" value="Enviar">
    </form>

<?php
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero']; 

        if ($numero === '') {
            echo '<p>Erro: Nenhum número inserido!</p>';
        } else {
            echo '<table>';
            echo '<tr>';
            echo '<th> Tabuada do número: ' . $numero . '</th>';
            echo '</tr>';

            for ($i = 1; $i <= 10; $i++) {
                echo '<tr>';
                echo '<td>' . $numero . ' X ' . $i . ' = ' . ($numero * $i) . '</td>';
                echo '</tr>';
            }

            echo '</table>';
            include("tabuada.php");
        }
    } else {
        $numero = '';
    }
?>
</body>
</html>
