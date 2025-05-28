<?php

$casa=200000;
$acrescimo=16;
$resultado;
$valor;
$resultado = ($casa * $acrescimo) / 100;
$parcelas;
$valor = $resultado + $casa;
$parcelas = $resultado /10;
echo "O valor de cada parcela é: $parcelas\n";
echo "O valor total é: $valor";

