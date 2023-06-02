<!DOCTYPE html>
<html>
	<head>
	</head>
	
<body>

	<h1>Exercício 1</h1>
	<?php
	
		$n = isset($_GET['n']) ? $_GET['n'] : null;
		
		if(($n == null)){
			echo "Insira um valor para a variável";
		} else {
		
		if ($n > 10 || $n < 1){
			echo "Insira um outro número entre 1 e 10";
		} else {
			for ($i=1; $i <= 10; $i++) { 
				echo $n . " * " . $i . " = " . $n*$i . "<br>";
			}
		}
		
		}
	?>

</body>
</html>