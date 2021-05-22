<?php

/*
    EN - All of the content surrounded by double quotes is measured by PHP. If the string contains a variable, his
    value will be translated.

    BR - Todo o conteúdo contido dentro de aspas duplas é avaliado pelo PHP. Se a string possuir uma variável, esta
    terá seu valor traduzido.
*/

$team = 'Liverpool';

print "$team is the biggest football team of UK!" . "<br>";
print '$team is the biggest football team of UK!' . "<br>";

/* 
    EN - We can declare a string with a amount of multiple lines by chose a keyword to delimit his begin and end.
    
    BR - Também podemos declarar uma string com múltiplas linhas, escolhendo uma palavra-chave para delimitar seu
    início e fim.
*/

$multipleLines = <<<KEY
                In this area you
                can write strings
                with multiple lines
                KEY;

echo $multipleLines;
