<?php

/// Tipos Basicos ///

//String
$nome = "Hcode";
$site = 'www.hcode.com.br';

//Numerico
$ano = 1990;

//Ponto Flutuante
$salario = 5500.99;

//Booleano
$bloqueado = false;

////////////////////

/// Tipos Compostos ///

//Array
$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];

//Data e Hora
$nascimento = new DateTime();

//var_dump($nascimento);

////////////////////

/// Tipos especiais ///

//Le um arquivo
$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);

//Variavel nula
$nulo = NULL;
?>
