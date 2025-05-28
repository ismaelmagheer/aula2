<?php
$clarinete=900;
$porcentagem=7;
$resultado;
$desconto;
$desconto = ($clarinete * $porcentagem) / 100;
$resultado = $clarinete - $desconto;

echo "O valor do produto é: $clarinete\n";
echo "O valor do desconto é: $desconto\n";
echo "O resultado é: $resultado";