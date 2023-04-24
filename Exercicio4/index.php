<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=drive-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title> Exercicio4 </title>
</head>

<body>
	<form action="" method="post">
        <h2>Insira três números:</h2>

        <input type="text" name="numero1" id="numero1">
    </br>
        <input type="text" name = "numero2" id="numero2">
    </br>
        <input type="text" name = "numero3" id="numero3">
    </br>
        <input type="submit" value="Enviar">
    </form>

<?php

    if (key_exists('numero1', $_POST)){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];

        $numeros = [$numero1, $numero2, $numero3];

        // ordena os números em ordem decrescente
        rsort($numeros);

        // imprime os números em ordem decrescente
        echo "<h2> Números em ordem decrescente:</h2>";
        
        foreach ($numeros as $numero) {
            echo "<p class='ordem'>".$numero."<p>";
        }
    }
?>

</body>

</html>