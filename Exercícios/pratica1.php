<!DOCTYPE html>
<html>
	<head>
	</head>
	
<body>
	
	<h1>Pratica 1</h1>
	<?php
		
		$nome_get = isset ($_GET['nome']) ? $_GET['nome'] : null;
		$idade_get = isset ($_GET['idade']) ? $_GET['idade'] : null;

		if ($nome_get == null || $idade_get == null) {
			echo "Insira um nome e uma idade<br>";
		}else{
			if ($idade_get >= 18) {
				echo "Olá " . $nome_get . "! Você tem " . $idade_get . " anos. Se beber, não dirija";
			}else{
				echo "Olá " . $nome_get . "! Você tem " . $idade_get . " anos. Loko de refri";
			}
		}

	?>

</body>
</html>