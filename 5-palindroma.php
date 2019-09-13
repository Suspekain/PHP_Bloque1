<!DOCTYPE html>
<html>
<head>
	<title>Comunidad</title>
</head>
<body>
  <?php
  $palabra = "osfnsdfho";
	$letras = str_split($palabra);

	for ($i=0; $i < sizeof($letras)/2; $i++) {
		echo sizeof($letras)-i;
		if ($letras[i] == sizeof($letras)-i) {
			// code...
		} else {
			// code...
		}
	}
	?>
</body>
</html>
