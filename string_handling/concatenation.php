<?php

/*
    EN - To concatenate a string, we must use the "." operator or put multiple variables into a double
    quotes string "", which will interpret the variable's content.

    BR - Para concatenar strings, devemos usar o operador "." ou colocar múltiplas variáveis em uma string
    de aspas duplas "", a qual irá interpretar os valores contidos nas variáveis.
*/

$team = "Internacional";

echo $team . ' its the biggest team in Rio Grande do Sul!' . "<br>";
echo "{$team} its the biggest team in Rio Grande do Sul!" . "<br>";

// PHP automatically realizes the types conversion.
// O PHP realiza automaticamente a conversão entre tipos.

$libertadores = 2;

echo 'Internacional have ' . $libertadores . ' CONMEBOL Libertadores titles!' . "<br>";
echo "Internacional have $libertadores CONMEBOL Libertadores titles!";
