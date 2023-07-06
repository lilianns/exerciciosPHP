<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=drive-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title> Exercicio 7 </title>
        </head>
<body>
        <form action="" method="get">
                <label for="livro">Nome do Livro:</label>
                <input type="text" id="livro" name="livro">
                <label for="tipoUsuario">Tipo de Usuário:</label>
                <select id="tipoUsuario" name="tipoUsuario">
                        <option value="">Selecione</option>
                        <option value="professor">Professor</option>
                        <option value="aluno">Aluno</option>
                </select>
                <input type="submit" value="Gerar Recibo">
        </form>
<?php

        $livro = "";
        $tipoUsuario = "";

        if (array_key_exists('livro', $_GET)) {
        $livro = $_GET['livro'];
        
            
        if (array_key_exists('tipoUsuario', $_GET)) {
        $tipoUsuario = $_GET['tipoUsuario'];
        }

        if ($livro  && $tipoUsuario) {
                if ($tipoUsuario == "professor") {
                $prazoDevolucao = 10;

                        echo '<div class="recibo">';
                        echo "<h2>Recibo:</h2>";
                        echo "<p>Livro: $livro </p>";
                        echo "<p>Tipo de usuário: Professor </p>";
                        echo "<p> Prazo de devolução: $prazoDevolucao dias a partir de hoje <p>";

                } elseif ($tipoUsuario == "aluno") {
                $prazoDevolucao = 3;

                        echo '<div class="recibo">';
                        echo "<h2>Recibo:</h2>";
                        echo "<p>Livro: $livro</p>";
                        echo "<p>Tipo de usuário: Aluno</p>";
                        echo "<p> Prazo de devolução: $prazoDevolucao dias a partir de hoje <p>";

                }
        }
}
?>
</body>
</html>