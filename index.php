<?php

//01 - Construa um algoritmo que, tendo como dados de entrada dois pontos quaisquer no plano p(x1, y1) e P(x2, y2), escreva a distância entre eles.

function verificaDistancia($x1, $x2, $y1, $y2){
	$distancia = NULL;
	$x1 = $x1;
	$x2 = $x2;
	$y1 = $y1;
	$y2 = $y2;
	$distancia = sqrt( pow( ($x2 - $x1) , 2) + pow( ($y2 - $y1), 2) );
	return round($distancia, 2) . '<hr>';
}
echo 'Exercício 01 - Construa um algoritmo que, tendo como dados de entrada dois pontos quaisquer no plano p(x1, y1) e P(x2, y2), escreva a distância entre eles.<br/>';
echo 'Resultado: ' . verificaDistancia(10, 20, 4, 5);

// 02 - Escreva um algoritmo que leia três números inteiros e positivos(A, B, C) e calcule a seguinte expressão: D = R + S / 2, onde R = (A + B)2 e S = (B + C)2

function numerosInteiros($a, $b, $c){
	$a = $a;
	$b = $b;
	$c = $c;
	$r = pow( ($a + $b), 2);
	$s = pow( ($b + $c), 2);
	$d = ($r + $s) / 2;
	return $d;
}
echo 'Exercício 02 - Escreva um algoritmo que leia três números inteiros e positivos(A, B, C) e calcule a seguinte expressão: D = R + S / 2, onde R = (A + B)2 e S = (B + C)2. <br />';
echo 'Resultado: ' . numerosInteiros(5, 3, 8) . '<hr>';

// 03 - Faça um algoritmo que leia a idade de uma pessoa expressa em anos, meses e dias e mostre-a expressa apenas em dias.

function calculaIdadeEmDias($anos, $meses, $dias){
	$anos = $anos;
	$meses = $meses;
	$dias = $dias;
	$idadeDias = ($anos * 365) + ($meses * 30) + ($dias);
	return number_format($idadeDias, 0, '', '.');
}
echo 'Exercício 03 - Faça um algoritmo que leia a idade de uma pessoa expressa em anos, meses e dias e mostre-a expressa apenas em dias. <br />';
echo 'Resultado: ' . calculaIdadeEmDias(38,2,25) . ' dias. <hr>';

// 04 - Faça um algoritmo que leia a idade de uma pessoa expressa em dias, e mostre-a expressa em anos, meses e dias.

function calculaIdadeAnoMesDia($dias){
	$anos = intdiv($dias, 365);
	$meses = intdiv( ($dias % 365), 30); 
	$dias = ( ($dias % 365) % 30 ); 
	$resultado = $anos . ' Anos, ' . $meses . ' Meses e ' . $dias . ' Dias.';
	return $resultado;
}
echo 'Exercício 04 - Faça um algoritmo que leia a idade de uma pessoa expressa em dias, e mostre-a expressa em anos, meses e dias. <br />';
echo 'Resultado: ' . calculaIdadeAnoMesDia(13955) . '<hr>';

// 05 - Faça um algoritmo que leia as 3 notas de um aluno e calcule a média final desde aluno. Considerar que a média é ponderada e que o peso das notas é: 2, 3 e 5.

function mediaPonderada($n1, $n2, $n3){
	$n1 = $n1;
	$n2 = $n2;
	$n3 = $n3;
	$p1 = 2;
	$p2 = 3;
	$p3 = 5;

	$p = ( ( ($n1 * $p1) + ($n2 * $p2) + ($n3 * $p3) ) / ($p1 + $p2 + $p3) );
	return $p;
}
echo 'Exercício 05 - Faça um algoritmo que leia as 3 notas de um aluno e calcule a média final desde aluno. Considerar que a média é ponderada e que o peso das notas é: 2, 3 e 5. <br />';
echo 'Resultado: ' . 'A média ponderada do aluno é: ' . mediaPonderada(8, 7.5, 9) . '<hr>';

// 06 - Faça um algoritmo que leia o tempo de duração de um evento em uma fábrica expressa em segundos e mostre-o expresso em horas, minutos e segundos

function retornaEvento($segundos){
	$horas = intdiv( $segundos, 3600 );
	$minutos = fmod( $segundos, 3600 );
	$segundos = fmod( $segundos, 3600 ) / 60;
	return $horas . ' horas, ' . $minutos . ' minutos e ' . $segundos . ' segundos.' ;
}
echo 'Exercício 06 - Faça um algoritmo que leia o tempo de duração de um evento em uma fábrica expressa em segundos e mostre-o expresso em horas, minutos e segundos. <br />';
echo 'Resultado: ' . retornaEvento(18036) . '<hr>';


// 07 - O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor e dos impostos(aplicados ao custo de fábrica). Supondo que a percentagem do distribuidor seja de 28% e os impostos de 45%, escrever um algoritmo que leia o custo de fábrica de um carro e escreva o custo ao consumidor.

function calculaImposto($custoFabrica){
	$custoFabrica = $custoFabrica;
	$resultado = $custoFabrica + ( ( ($custoFabrica * 28) / 100 ) + ( ($custoFabrica * 45) / 100 ) );
	return number_format($resultado, 2, ',','.');
}
echo 'Exercício 07 - O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor e dos impostos(aplicados ao custo de fábrica). Supondo que a percentagem do distribuidor seja de 28% e os impostos de 45%, escrever um algoritmo que leia o custo de fábrica de um carro e escreva o custo ao consumidor. <br />';
echo 'Resultado: R$ ' . calculaImposto(20000) . '<hr>';

// 08 - Escreva um algoritmo que lê os coeficientes a, b, c, d, e e f e calcula e mostra os valores de x e y.

function calculo($a, $b, $c, $d, $e, $f){
	$a = $a;
	$b = $b;
	$c = $c;
	$d = $d;
	$e = $e;
	$f = $f;

	$x = ( ($c * $e) - ($b * $f) ) / ( ($a * $e) - ($b * $d) );

	$y = ( ($a * $f) - ($c * $d) ) / ( ($a * $e) - ($b * $d) );

	return 'O valor de x é: ' . $x . ', o valor de y é: ' . $y . '.';
}
echo 'Exercício 08 - Escreva um algoritmo que lê os coeficientes a, b, c, d, e e f e calcula e mostra os valores de x e y. <br />';
echo calculo(10, 14, 20, 5, 8, 9) . '<hr>';