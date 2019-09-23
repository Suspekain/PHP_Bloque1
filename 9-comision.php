<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios</title>
</head>
<body>
  <?php
	$venta = 20000;
	$comision = null;

	echo "Comision: ";
	if ($venta < 10000) {
		echo "5%";
		$comision = 5;
	} else if (10000 <= $venta && $venta < 20000) {
		echo "8%";
		$comision = 8;
	}else if (20000 <= $venta && $venta < 40000) {
		echo "10%";
		$comision = 10;
	}else if ($venta <= 40000) {
		echo "13%";
		$comision = 13;
	}
	echo "<br>";
	echo "A cobrar: " . ($venta * $comision)/100;

	?>
</body>
</html>
