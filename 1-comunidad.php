<!DOCTYPE html>
<html>
<head>
	<title>Comunidad</title>
</head>
<body>
  <?php
  $pisos = 5;
  $puertas = 3;

  for ($i=1; $i <= $pisos; $i++) {
    for ($j=1; $j <= $puertas; $j++) {
      echo $i . $j;
      echo "<br>";
    }
    echo "<br>";
  }
   ?>
</body>
</html>
