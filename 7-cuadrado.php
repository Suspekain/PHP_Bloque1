<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios</title>
</head>
<body>
  <?php
	$n = 1;
	$cuadrado = 0;

	while ($cuadrado < 100) {
		$cuadrado = pow($n, 2);
		echo "Numero: " . $n . " Cuadrado: " . $cuadrado . "<br>";
		$n += 1;
	}
	?>
</body>
</html>
