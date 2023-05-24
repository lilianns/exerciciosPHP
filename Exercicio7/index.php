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
        <form action="Exercicio7/index.php" method="get">
                <label for="livro">Nome do Livro:</label>
                <input type="text" id="livro" name="livro">
                <label for="tipousuario">Tipo de Usuário:</label>
                <select id="tipousuario" name="tipousuario">
                        <option value="">Selecione</option>
                        <option value="professor">Professor</option>
                        <option value="aluno">Aluno</option>
                </select>
                <input type="submit" value="Gerar Recibo">
        </form>
</body>
</html>