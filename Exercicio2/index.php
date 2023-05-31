<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=drive-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Exercicio 2</title>
</head>
<body>
    <form action="" method="get">
        <label for="Divisor">Insira um número para verificar se ele é divisível por 10, 5, 2 ou por nenhum desses números:</label>
        <input type="text" id="Divisor" name="Divisor">
        <input type="submit" value="Enviar">
    </form>
<?php
    $Divisor = NULL;
    if (key_exists('Divisor', $_GET)){
        $Divisor = $_GET["Divisor"];
    }
    
    if ($Divisor % 10 == 0 && $Divisor % 5 == 0 && $Divisor % 2 == 0) {
        echo "<h1> $Divisor é divisível por 10, 5 e 2 </h1>";
    }
    elseif ($Divisor % 10 == 0) {
        echo "<h1> $Divisor é divisível por 10</h1>";
    }
    elseif ($Divisor % 5 == 0) {
        echo "<h1> $Divisor é divisível por 5</h1>";
    }
    elseif ($Divisor % 2 == 0) {
        echo "<h1> $Divisor é divisível por 2</h1>";
    }
    else {
        echo "<h1> $Divisor não é divisível por 10, 5 e nem por 2.</h1>";
    }
?>
</body>
</html>