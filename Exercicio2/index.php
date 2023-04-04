<!DOCTYPE html>
<html>
	<head>
		<title>Divisão</title>
	</head>
	<body>
		<?php
			$Divisor = $_POST["Divisor"];

			if ($Divisor % 10 == 0) {
				echo "<h1>É divisível por 10</h1>";
			}
			elseif ($Divisor % 5 == 0) {
				echo "<h1>É divisível por 5</h1>";
			}
			elseif ($Divisor % 2 == 0) {
				echo "<h1>É divisível por 2</h1>";
			}
			else {
				echo "<h1>Não é divisível por 10, 5 e nem por 2.</h1>";
			}
		?>
	</body>
</html>