<?php
// constantes são valores salvos em memória que não podem ser alterados
// por convenção são definidas com letras maiúsculas
// pela sintaxe, não pode ter o cifrão antes 
define("VALOR_DIA", "80");
// outro modo de definir uma constante:
const GORJETAS = "40";

echo VALOR_DIA + GORJETAS;

//constantes não podem ser alteradas, gera um erro no editor e na compilação:
const GORJETAS = "50";
echo GORJETAS;