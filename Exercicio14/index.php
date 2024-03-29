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

    echo '<a href="form.html" class="btn waves-effect waves-light">Voltar</a>';

    echo '<a href="listagem.php" class="btn waves-effect waves-light">Listagem</a>';

    include("conexao.php");
    echo '</br>';

    $sql="INSERT INTO exercicio14(altura_chico, altura_juca, crescimento_chico, crescimento_juca, anos) 
        VALUES ($altura_chico, $altura_juca, $crescimento_chico, $crescimento_juca, $anos)";
    if(mysqli_query($conexao, $sql)){
        echo " Cadastrado com sucesso";
    }
    else{
        echo "erro".mysqli_connect_errno($conexao);
    }

    mysqli_close($conexao);
}
?>
