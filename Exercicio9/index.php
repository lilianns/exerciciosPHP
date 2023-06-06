<link rel="stylesheet" href="style.css">

<?php
if (isset($_POST["numero1"])) {
    $numero = $_POST["numero1"];

    if (is_numeric($numero)) {
    for ($i = 0; $i < $numero; $i++) {
            echo "<div class='sol'>SOL</div> ";
    }
    } else {
        echo '<p class="valido"> Por favor, insira um número válido.</p>';
    }

    // Botão para voltar ao formulário
    echo '<form action="form.html" method="post">
            <input type="submit" value="Voltar">
          </form>';
}
?>