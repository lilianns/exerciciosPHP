<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=drive-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Exercicio 8 </title>
</head>
<body>
    <form action="" method="get">
        <label for="numero"> Digite um número:  </label>
        <input type="number" id="numero" name="numero">
        <button type="submit">Enviar</button>
    </form>
<?php

    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        $produto = 1;
    
        echo "<h3> De 1 até $numero:</h3>";
        for ($i = 1; $i <= $numero; $i++) {
            echo "<li>$i</li>";
            $produto *= $i;
        }
    
        echo "<h2>Produto: $produto</h2>";
    }
       
?>
</body>
</html>