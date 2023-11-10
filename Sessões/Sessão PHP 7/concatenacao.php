<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>
	
		<?php

			$nome = 'Maria';
			$cor = 'Amarelo';
			$idade = 25;
			$atividade_preferida = 'andar de bicicleta';

			//operador .

			echo "Olá " . $nome . ", vejo que sua cor favorita é ". $cor.", estou vendo também que você possui ". $idade ." anos e que gosta de". $atividade_preferida ."";

			//aspas duplas

			echo "<br />";

			echo "Olá $nome vejo que sua cor favorita é $cor estou vendo também que você possui $idade anos e que gosta de $atividade_preferida "

		?>

	</body>
</html>