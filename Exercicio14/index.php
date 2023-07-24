<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<?php

if (isset($_POST["altura_chico"]) && isset($_POST["altura_juca"]) && isset($_POST["crescimento_chico"]) && isset($_POST["crescimento_juca"])) {
    $altura_chico = $_POST["altura_chico"];
    $altura_juca = $_POST["altura_juca"];
    $crescimento_chico = $_POST["crescimento_chico"];
    $crescimento_juca = $_POST["crescimento_juca"];

    function calculo($altura_chico, $altura_juca, $crescimento_chico, $crescimento_juca) {
        $anos = 0;
        while ($altura_juca <= $altura_chico) {
            $altura_chico += $crescimento_chico;
            $altura_juca += $crescimento_juca;
            $anos++;
        }
        return $anos;
    }

    $anos = calculo($altura_chico, $altura_juca, $crescimento_chico, $crescimento_juca);

    echo '<div class="container">';
    echo '<p class="flow-text"> Serão necessários ' . $anos . ' anos para que Juca seja maior do que Chico.</p>';

    // Botão para voltar ao formulário
    echo '<form action="form.html" method="get">
        <input type="submit" value="Voltar" class="btn">
    </form>';
    echo '</div>';

    include("conexao.php");
    echo '</br>';

    $sql="INSERT INTO exercicio14(altura_chico, altura_juca, crescimento_chico, crescimento_juca, anos) 
        VALUES ($altura_chico, $altura_juca, $crescimento_chico, $crescimento_juca, $anos)";

    mysqli_close($conexao);
}
?>
