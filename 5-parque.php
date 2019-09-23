<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios</title>
</head>
<body>
  <?php
	$edad = 6;
	$altura = 100;
	$acompañado = true;

	if ($edad >= 10 || $altura >= 120) {
		echo "Apto";
	} else {
		if ($edad >= 6 && $acompañado) {
			echo "Apto";
		} else {
			echo "NO apto";
		}
	}


	?>
</body>
</html>
