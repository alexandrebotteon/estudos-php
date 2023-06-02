<!DOCTYPE html>
<html>
	<head>
	</head>
<body>

	<h1>Exercício 3</h1>
	<?php
	
		$distancia = isset($_GET['distancia']) ? $_GET['distancia'] : null;
		$rendimento = isset($_GET['rendimento']) ? $_GET['rendimento'] : null;
		$preco = isset($_GET['preco']) ? $_GET['preco'] : null;
		
		if($distancia == null || $rendimento == null || $preco == null){
			echo "Insira todas as informações";
		} else {
		
			$litros = $distancia / $rendimento;
			$valor = $preco * $litros;
			
			echo "Você gastará $" . $valor . " em " . $litros . " litros";
		}
	?>

</body>
</html>