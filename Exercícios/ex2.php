<!DOCTYPE html>
<html>
	<head>
	</head>
<body>

	<h1>Exercício 2</h1>
	<?php
	
		$n1 = isset($_GET['n1']) ? $_GET['n1'] : null;
		$n2 = isset($_GET['n2']) ? $_GET['n2'] : null;
		$n3 = isset($_GET['n3']) ? $_GET['n3'] : null;
		
		if($n1 == null || $n2 == null || $n3 == null){
			echo "Insira os três valores para nota";
		} else {
		
			$media = ($n1 + $n2 + $n3) / 3;
			
			if ($media >= 7){
				echo "Sua média é " . $media . ". Você está aprovado";
			} else {
				if ($media > 5 && $media < 7){
				echo "Sua média é " . $media . ". Você está de recuperação";
			} else {
				echo "Sua média é " . $media . ". Você está reprovado";
			}
			}	
		}
	?>

</body>
</html>