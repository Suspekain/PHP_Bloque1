<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios</title>
</head>
<body>
  <?php
	$base = 11;

	if ($base%2 != 0) {
		for ($i=1; $i <= ($base/2)+1; $i++) {
			for ($j=1; $j <= $base ; $j++) {

				echo "*";
			}
			echo "<br>";
		}
	} else {
		echo "El numero debe ser impar.";
	}

	?>
</body>
</html>
