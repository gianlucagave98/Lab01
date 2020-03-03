
<html>
<head>
	<title>Resultado de la comision en ventas PHP</title>
</head>
<body>
	<?php
	$numero = $_POST['EN'];
	if ($numero==0){
		echo "El $numero es nulo";
	} elseif ($numero%2==0){
		echo "El $numero es par";
	} else {
		echo "El $numero es impar";
	}
	?>
</body>
</html>