<!DOCTYPE html>
<html>
	<head>
	</head>
	
<body>

	<h1>Pratica 2</h1>
	<?php
	
		$x = isset($_GET['x']) ? $_GET['x'] : null;
		$y = isset($_GET['y']) ? $_GET['y'] : null;
		
		if(($x == null) && ($y == null)){
			echo "Insira um valor para as variáveis";
		} else {
		
		if ($x > $y){
			echo $_GET['x'];
		} else {
			echo $_GET['y'];
		}
		
		}
	?>

</body>
</html>