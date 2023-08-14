<?php

//para utilizar uma variável definida no início do código dentro
// de uma função, por exemplo, a variável deverá ser identificada
// na função como global, exemplo.

$var1 = 51;

function idade(){
    //$var1 = 50;
    global $var1;
    return "Você tem " . $var1 . " anos.";
}

echo idade();