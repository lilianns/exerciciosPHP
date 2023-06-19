<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=drive-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title> Exercicio 5 </title>
	</head>

<body>
    <form action="" method="get">
        <label> Informe 3 valores para classificação do triângulo </label>
        <input type="text" id="num1" name="num1">
        <input type="text" id="num2" name="num2">
        <input type="text" id="num3" name="num3">
		<input type="submit" value="Enviar">

        <?php
    if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num3 = $_GET['num3'];
    } else {
		$num1 = 0;
		$num2 = 0;
		$num3 = 0;
	}
	    if (($num1 + $num2 > $num3) && ($num1 + $num3 > $num2) && ($num2 + $num3 > $num1)) {
	      if (($num1 == $num2) && ($num2 == $num3)) {
	        echo  '<p>Triângulo equilátero</p>';
	      } else if (($num1 == $num2) || ($num1 == $num3) || ($num2 == $num3)) {
	        echo '<p>Triângulo isósceles</p>';
	      } else {
	        echo '<p>Triângulo escaleno</p>';
	      }
	    } else {
            echo '<p>Os valores informados não formam um triângulo</p>';
	    }
?>
</body>

</html>