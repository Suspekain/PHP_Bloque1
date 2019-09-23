	<!DOCTYPE html>
	<html>
	<head>
		<title>Ejercicios</title>
	</head>
	<body>
	  <?php
		$total_compra = 20;
		$tipo_compra = mascota;
		$envio = null;
		$iva = null;
		$envio = false;

		if ($tipo_compra == mascota || $tipo_compra == ropa) {
			if ($total_compra < 19) {
				if ($tipo_compra == mascota) {
					echo "No se puede realizar el envio";
				} elseif ($tipo_compra == ropa) {
					echo "Los gastos de envio son 9 euros";
					$envio = true;
					$envio = 9;
				}
			} elseif ($total_compra >= 19 && $total_compra <= 40) {
				echo "Los gastos de envio son 9 euros";
				$envio = true;
				$envio = 9;
			} elseif ($total_compra > 80) {
				echo "Los portes de envio son gratis";
				$envio = true;
				$envio = 0;
			}

			if ($envio) {
				if ($tipo_compra == mascota) {
					$iva = 1.10;
				} elseif ($tipo_compra == ropa) {
					$iva = 1.21;
				}
			}
			echo "<br> Total a pagar: ";
			echo $total_compra + ($total_compra*$iva);
		} else {
			echo "Tipo de compra incorrecto!";
		}

		?>
	</body>
	</html>
