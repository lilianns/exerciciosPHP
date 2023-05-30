<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=drive-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Exercicio3 </title>
</head>
<body>
    <form action="" method="get">
        <label for="nome">Seu nome:</label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="idade">Insira sua idade:</label>
        <input type="text" name="idade" id="idade">
        <br>
        <label for="genero">Informe seu sexo:</label>
        <select name="genero" id="genero">
            <option value="feminino">Feminino</option>
            <option value="masculino">Masculino</option>
        </select>
        <input type="submit" value="Enviar">
</form>
<?php
        if (isset($_GET["nome"]) && isset($_GET["idade"]) && isset($_GET["genero"])) {
            $nome = $_GET["nome"];
            $idade = $_GET["idade"];
            $genero = $_GET["genero"];

            if ($idade < 25 && $genero =="feminino") {
                echo "<p class='aceita'>".$nome." --- ACEITA</p>";
            } else {
            echo "<p class='nao-aceita'>".$nome." --- NAO ACEITA</p>";
            }
        }
?>
</body>
</html>