<?php

/*
    EN - Inside double quotes "" we can use special controls differently interpreted by PHP, who are escape
    characters "\".

    BR - Dentro de aspas duplas podemos usar controles especiais interpretados diferentemente pelo PHP,
    que são os caracteres de escape "\".

    Principals:                                             Principais:

    \n - Break row.                                         Quebra de linha.
    \r - Carriage return.                                   Retorno de carro.
    \t - Tab.                                               Tabulação.
    \\ - Reverse bar. "\\" is the same as '\'.              Barra invertida. "\\" é o mesmo que '\'.
    \" - Double quotes.                                     Aspas duplas.
    \$ - '$' symbol.                                        Símbolo '$'.
*/

echo "My name is \"John\". <br>";
echo 'My name is "John". <br>';

echo "My salary is less than \$1000000000000000000000000000000000000,00. <br>";
echo "My salary is less than $1000000000000000000000000000000000000,00.";
