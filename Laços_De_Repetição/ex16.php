<?php

function gerarFibonacciAteLimite($limite) {
    $fibonacci = [1, 1];
    while (true) {
        $proximoTermo = end($fibonacci) + prev($fibonacci);
        if ($proximoTermo > $limite) {
            break;
        }
        $fibonacci[] = $proximoTermo;
    }
    return $fibonacci;
}

$limite = 500;
$serieFibonacci = gerarFibonacciAteLimite($limite);

echo "Série de Fibonacci até o valor limite de " . $limite . ": ";
echo implode(", ", $serieFibonacci) . "\n";

?>