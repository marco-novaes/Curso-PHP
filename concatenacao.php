<html>
<head>
	<meta charset="utf-8"/>
	<title>Curso PHP</title>
</head>
<body>


	<?php 

		$nome = 'Maria';
		$cor = 'amarelo';
		$idade = 26;
		$atividade_preferida = 'andar de bicicleta';


		//operador .
    echo 'Olá '. $nome . ', vi que sua cor preferida é '. $cor .', estou vendo que você possui '. $idade . ' anos e que gosta de ' . $atividade_preferida . ' ';

		//aspas duplas
		echo '<br/>';

		echo "Olá $nome, vi que sua cor preferida é $cor , estou vendo que você possui $idade anos e que gosta de $atividade_preferida ";
	?>
</body>
</html>
