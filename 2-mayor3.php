<!DOCTYPE html>
<html>
<head>
	<title>Comunidad</title>
</head>
<body>
  <?php
  $n1 = 1;
	$n2 = 10;
	$n3 = 50;

	if ($n1 == $n2 && $n1 == $n3) {
		echo "Son iguales";
	} else {
		echo "El numero mas alto es: ";
		if ($n1 >= $n2 && $n1 >= $n3) {
			echo $n1;
		} else if ($n2 >= $n1 && $n2 >= $n3) {
			echo $n2;
		} else if ($n3 >= $n1 && $n3 >= $n2) {
			echo $n3;
		}
	}

   ?>
</body>
</html>
