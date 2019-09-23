<!DOCTYPE html>
<html>
<head>
	<title>Comunidad</title>
</head>
<body>
  <?php
  $edad = 37;

	echo "El rango de edad es: ";
	if (0<$edad && $edad<=10) {
		echo "0 - 10";
	} else if (10<$edad && $edad<=20) {
		echo "10 - 20";
	} else if (20<$edad && $edad<=30) {
		echo "20 - 30";
	} else if (30<$edad && $edad<=40) {
		echo "30 - 40";
	} else if (40<$edad && $edad<=50) {
		echo "40 - 50";
	} else if (50<$edad && $edad<=60) {
		echo "50 - 60";
	} else if (60<$edad && $edad<=70) {
		echo "60 - 70";
	} else if (70<$edad && $edad<=80) {
		echo "70 - 80";
	} else if (80<$edad && $edad<=90) {
		echo "80 - 90";
	} else if (90<$edad && $edad<=100) {
		echo "90 - 100";
	}

   ?>
</body>
</html>
