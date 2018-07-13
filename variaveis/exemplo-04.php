<?php
//Aula sobre variaveis pre-definidas (super globais)

//Converte a string recebida em inteiro
$nome = (int)$_GET["a"];
$sobrenome = $_GET["b"];
//var_dump ($nome,$sobrenome);

// Pega o IP do cliente
$ip = $_SERVER["REMOTE_ADDR"];
//echo $ip;

// Pega o nome do arquivo
$script = $_SERVER["SCRIPT_NAME"];
echo $script;

?>
