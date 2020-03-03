
<html>
<head>
	<title>Resultado de la comision en ventas PHP</title>
</head>
<body>
	<?php
	$ventas = $_POST['VT'];
	if ($ventas <= 150){
		echo "No recibe comision";
	} elseif ($ventas > 150 && $ventas < 400){
		$comision= $ventas * 0.1;
		echo "Recibe de comision: S/.".$comision;
	} else {
		$v2 = $ventas*0.09;
		$comision= $v2 + 50;
		echo "Recibe de comision: S/.".$comision;
	}
	?>
</body>
</html>