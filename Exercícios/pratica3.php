<!DOCTYPE html>
<html>
	<head>
	</head>
<body>

	<h1>Pratica 3</h1>
	<?php
	
		$x = isset($_GET['x']) ? $_GET['x'] : null;
		$y = isset($_GET['y']) ? $_GET['y'] : null;
		$z = isset($_GET['z']) ? $_GET['z'] : null;
		
		if($x == null || $y == null || $z == null){
			echo "Insira um valor para os três lados do triângulo";
		} else {
		
			if ($x + $y > $z && $x + $z > $y && $z + $y > $x){
				echo "É possível formar um triângulo";
			} else {
				echo "Não é possível formar um triângulo";
			}
		
		}
	?>

</body>
</html>