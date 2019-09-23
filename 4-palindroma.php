<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios</title>
</head>
<body>
  <?php
  $palabra = "qwertytrewq";
	$letras = str_split($palabra);
	$j = sizeof($letras);
	$espalindroma = true;

	for ($i=0; $i < sizeof($letras)/2; $i++) {
		if ($letras[i] != $letras[$j]) {
			$espalindroma = false;
		}
		$j -= 1;
	}

	if ($espalindroma) {
		echo "Es palindroma";
	} else {
		echo "No es palindroma";
	}

	?>
</body>
</html>
