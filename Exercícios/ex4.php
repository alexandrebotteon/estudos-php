<!DOCTYPE html>
<html>
	<head>
	</head>
<body>

	<h1>Exercício 4</h1>
	<?php
	
		$celsius = isset($_GET['celsius']) ? $_GET['celsius'] : null;
		
		if($celsius == null){
			echo "Insira a temperatura";
		} else {
		
			$fahrenheit = 1.8 * $celsius + 32;
			
			echo "A temperatura em fahrenheit é de " . $fahrenheit . "F°";
		}
	?>

</body>
</html>