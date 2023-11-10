<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>
	
		<?php

			//operadores condicionais/comparação
			//==
			//===
			//!= ou <>
			//!==
			// <
			// >
			// <=
			// >=

			//operadores lógicos
			//e - && ou AND -> retorna verdadeiro se todos os resultados das expressões forem verdadeiros
			//ou - || ou OR -> retrona verdadeiro se pelo menos um dos resultados das expressões forem verdadeiros
			//xor - xor -> retorna verdadeiro se uma das expressões for verdadeira e a outra false ou vice-verso
			//! -> inverte o resultado retornado pela expressão

			//() estabelecer precedência

			if ((22 == 22 && 3 == 3) || 5 != 5) {
				echo "Verdadeiro";
			} else {
				echo "Falso";
			}

		?>

	</body>
</html>