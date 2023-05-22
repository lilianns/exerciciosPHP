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
        <input type="text" name="numero2" id="numero2">
        <input type="text" name="numero3" id="numero3">
        <input type="submit" value="Enviar">
    </form>

<?php

    if (array_key_exists('numero1', $_POST)){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];

        if ($numero1 < $numero2) {
            $aux = $numero1;
            $numero1 = $numero2;
            $numero2 = $aux;
        }
        
        if ($numero1 < $numero3) {
            $aux = $numero1;
            $numero1 = $numero3;
            $numero3 = $aux;
        }
        
        if ($numero2 < $numero3) {
            $aux = $numero2;
            $numero2 = $numero3;
            $numero3 = $aux;
        }

        echo "<h2> Números em ordem decrescente:</h2>";
        echo "<p class='ordem'>" . $numero1 . "<p>";
        echo "<p class='ordem'>" . $numero2 . "<p>";
        echo "<p class='ordem'>" . $numero3 . "<p>";
    }

?>
</body>
</html>