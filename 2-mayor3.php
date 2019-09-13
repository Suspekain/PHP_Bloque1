<!DOCTYPE html>
<html>
<head>
	<title>Comunidad</title>
</head>
<body>
  <?php
  $n1 = 1;
	$n2 = 2;
	$n3 = 3;

	echo "El mayor es: ";
	if ($n1 < $n2 && $n2 < $n3) {
		echo $n3;
	} else {
		if ($n1 < $n2) {
			echo $n2;
		} else {
			echo $n1;
		}

	}

   ?>
</body>
</html>
