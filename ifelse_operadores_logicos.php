<html>
<head>
	<meta charset="utf-8"/>
	<title>Curso PHP</title>
</head>
<body>
	<?php 

		//operadores condicionais/comparação
		//==
		//===
		//!= ou <>
		//!==
		//<
		//>
		//<=
		//>=


		//operadores lógicos
		// E: && ou ANd -> retorna verdadeiro se todos os resultados das expressões forem verdadeiro
		//OU: || ou OR -> retorna verdadeiros se pelo menos um dos resultados das expressões forem verdadeiro
		//XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeira e a outra falsa ou vice-versa
		//! -> inverte o resultado retornado pela expressão


		// verdadeiro e verdadeiro = verdadeiro
		/*if(3 == 3 && 10 > 3){
			echo 'Verdadeiro';
		}else {
			echo 'Falso';
		}*/

		// verdadeiro ou falso = verdadeiro
		/*if(3 == 3 || 10 > 3){
			echo 'Verdadeiro';
		}else {
			echo 'Falso';
		}*/

		//verdadeiro ou falso = falso 
		/*if(3 <= 2 XOR 10 > 15){
			echo 'Verdadeiro';
		}else {
			echo 'Falso';
		}*/

		//veradeiro xor verdadeiro = !(falso) = verdadeiro
		/*if(!(7 >= 4 XOR 10 < 15)){
			echo 'Verdadeiro';
		}else {
			echo 'Falso';
		}*/

		//falso = !(falso) = verdadeiro
		/*if(!('a' == 'a')){
			echo 'Verdadeiro';
		}else {
			echo 'Falso';
		}*/

		//(verdadeiro e verdadeiro) = verdadeiro ou falso = verdadeiro
		if((22 == 22 && 3 == 3) || 5 != 5 ){
			echo 'Verdadeiro';
		}else {
			echo 'Falso';
		}

		//() estabelecer precedência
		//utilizar parenteses para organizar

	?>
</body>
</html>
