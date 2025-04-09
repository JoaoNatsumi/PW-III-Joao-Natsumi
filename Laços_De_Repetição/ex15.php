<?php

function gerarFibonacci($n) {
    if ($n <= 0) {
        return [];
    } elseif ($n == 1) {
        return [1];
    } else {
        $fibonacci = [1, 1];
        for ($i = 2; $i < $n; $i++) {
            $proximoTermo = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            $fibonacci[] = $proximoTermo;
        }
        return $fibonacci;
    }
}

// Solicita ao usuário o valor de n
echo "Digite o valor de n (o número de termos da série de Fibonacci que você deseja gerar): ";
$n = intval(trim(fgets(STDIN)));

// Gera a série de Fibonacci até o n-ésimo termo
$serieFibonacci = gerarFibonacci($n);

// Exibe a série gerada
echo "Série de Fibonacci até o " . $n . "º termo: ";
echo implode(", ", $serieFibonacci) . "\n";

?>
