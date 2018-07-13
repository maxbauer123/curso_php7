<?php

$nome = "Max";

//Escopo 1
function teste() {
	//Utiliza a variavel global $nome
	global $nome;
	echo $nome;
}

//Escopo 2
function teste2() {
	//Utiliza a variavel dentro do escopo local
	$nome = "Bauer";
	echo $nome." agora no teste2";	
}

//Executa a funcao
teste2();
?>
