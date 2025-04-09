<?php

$populacaoA = 80000;
$taxaCrescimentoA = 0.03; // 3%
$populacaoB = 200000;
$taxaCrescimentoB = 0.015; // 1.5%
$anos = 0;

while ($populacaoA < $populacaoB) {
    $populacaoA += $populacaoA * $taxaCrescimentoA;
    $populacaoB += $populacaoB * $taxaCrescimentoB;
    $anos++;
}

echo "Número de anos necessários para que a população do país A ultrapasse ou iguale a do país B: " . $anos . " anos.\n";
echo "População do país A ao final de " . $anos . " anos: " . number_format($populacaoA, 0, ',', '.') . " habitantes.\n";
echo "População do país B ao final de " . $anos . " anos: " . number_format($populacaoB, 0, ',', '.') . " habitantes.\n";

?>