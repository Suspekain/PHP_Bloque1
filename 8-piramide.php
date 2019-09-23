<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios</title>
</head>
<body style="text-align: center; float: left">
  <?php
	$base = 11;
	$base_linea = 1;

	if ($base%2 != 0) {
		for ($i=1; $i <= ($base/2)+1; $i++) {
			for ($j=1; $j <= $base_linea ; $j++) {
				echo "*";
			}
			echo "<br>";
			$base_linea = $base_linea+2;
		}
	} else {
		echo "El numero debe ser impar.";
	}

	?>
</body>
</html>
