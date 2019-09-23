<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios</title>
</head>
<body>
  <?php
	$potencia = 3;
	$cantidad = 100;

	for ($i=1; $i < $cantidad; $i++) {
		$cuadrado = pow($i, $potencia);
		echo "Numero: " . $i . " Cuadrado: " . $cuadrado . "<br>";
	}
	?>
</body>
</html>
