<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>
		
	<?php

		$texto = 'Curso completo de PHP';

		//string to lower
		echo $texto. '<br>';
		echo strtolower($texto);

		echo '<hr>';

		//string to upper
		echo $texto. '<br>';
		echo strtoupper($texto);

		echo '<hr>';

		//upper case first
		echo $texto. '<br>';
		echo ucfirst($texto);

		echo '<hr>';

		//upper lenght
		echo $texto. '<br>';
		echo strlen($texto);

		echo '<hr>';

		//string replace
		echo $texto. '<br>';
		echo str_replace('.','JavaScript','22.20');

		//string replace
		echo $texto. '<br>';
		echo str_replace('.',',','22.20');

		echo '<hr>';

		//string replace
		echo $texto. '<br>';
		//'Curso completo de PHP'
		//0,1,2,3,4,5 ...20
		echo substr($texto, 0,14). '...';
	
	?>
	
	</body>
</html>