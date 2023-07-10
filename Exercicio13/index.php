<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <div class="section container">
            <div class="row card-panel">
<?php

$contador = 0;

if (isset($_POST["number"])) {
    $number = $_POST["number"];
    $numbers = explode(',', $number);
    $count = count($numbers);
    for ($i = 0; $i < $count; $i++) {
        $number = ($numbers[$i]);
            if ($number >= 100 && $number <= 200) {
                $contador++;
            } else if ($number == 0  || $number == '') {
                echo "<h3>Por favor, insira um número válido.</h3>";
                echo '<form action="form.html" method="post">
                <button class="btn waves-effect waves-light" type="submit" name="action">Voltar</button>
                </form>';
                die();
            }
        }
}


if ($count >0) {
    echo "<h3>Foi digitado $contador número(s) entre 100 e 200.</h3>";
    echo '<form action="form.html" method="post">
    <button class="btn waves-effect waves-light" type="submit" name="action">Voltar</button>
    </form>';
}
    include("conexao.php");
    echo '</br>';

    $sql="INSERT INTO exercicio13(numeros, resultado) 
        VALUES ($number, $contador)";
        if(mysqli_query($conexao, $sql)){
            echo " Cadastrado com sucesso";
        }
        else{
            echo "erro".mysqli_connect_errno($conexao);
        }

    mysqli_close($conexao);
?>