<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=drive-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Exercicio 1</title>

  </head>
  <body>
    <h1>Exercicio 1</h1>
    <form action="" method="post">
      <div>
        <label form="value1 "> Digite o primeiro número: </label>
        <input type="number" name="value1">
      </div>
      <div>
        <label for="value2"> Digite o segundo número: </label>
        <input type="number" name="value2">
      </div>
      <input type="submit" value="Enviar">
    </form>

    <?php
    if (key_exists('value1', $_POST)){

    $value1 = $_POST["value1"];
    $value2 = $_POST["value2"];

    $soma = $value1 + $value2;
    $resultado = "";

    if ($soma >= 20) {
    $resultado = $soma + 8;
    }else{
    $resultado = $soma - 5;
    }
     
    echo "<div class='result'> O resultado foi $resultado </div>";

}
?>
  </body>
</html>