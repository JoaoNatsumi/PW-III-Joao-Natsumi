<?php

echo "Digite o primeiro valor: ";
$valor1 = floatval(trim(fgets(STDIN)));

echo "Digite o segundo valor (não pode ser zero): ";
$valor2 = floatval(trim(fgets(STDIN)));

while ($valor2 == 0) {
    echo "Valor inválido! Digite um valor diferente de zero para o segundo valor: ";
    $valor2 = floatval(trim(fgets(STDIN)));
}


$resultado = $valor1 / $valor2;

echo "O resultado da divisão de " . $valor1 . " por " . $valor2 . " é: " . $resultado . "\n";

?>