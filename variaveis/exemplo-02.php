<?php

//Cria a variavel
$nome1 = "Max Bauer";

$sobrenome = "Marcelino";

// Concatena as variaveis
$nomecompleto = $nome1 . " " . $sobrenome;

//Printa a variavel
echo $nome1;

echo "<br/>";

echo "$nomecompleto";

echo "<br/>";

//Remove a variavel
unset($nome1);

//Verifica se a variavel existe
if (isset($nome1)) {

echo $nome1;

}

?>
