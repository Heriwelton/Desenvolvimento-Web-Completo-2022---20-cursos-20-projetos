<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>
		
	<?php
		
		//sequenciais (numéricos)
		//$lista_frutas = array('Banana','Maçã','Morango','Uva');
 		/*
 		$lista_frutas = ['Banana','Maçã','Morango','Uva'];	

		$lista_frutas[] = 'Abacaxi';

		
		echo '<pre>';
		var_dump($lista_frutas);
		echo '<pre>';

		echo '<hr> <br>';
		
		echo '<pre>';
		print_r($lista_frutas);
		echo '<pre>';
		*/

		//echo $lista_frutas[2];

		//associativos

		$lista_frutas = array('a'=>'Banana',
			'b'=>'Maçã',
			'c'=>'Morango',
			'd'=>'Uva');
		
		$lista_frutas['e'] = 'Abacaxi';

		echo '<pre>';
		var_dump($lista_frutas);
		echo '<pre>';

		
		echo $lista_frutas['e'];

	?>
	
	</body>
</html>