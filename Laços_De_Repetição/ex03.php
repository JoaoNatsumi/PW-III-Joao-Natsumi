<?php


echo "Digite o primeiro valor: ";
$valor1 = floatval(trim(fgets(STDIN)));


echo "Digite o segundo valor: ";
$valor2_digitado = trim(fgets(STDIN));
$valor2 = floatval($valor2_digitado);


while ($valor2 == 0) {
    echo "VALOR INVÁLIDO! Digite um valor diferente de zero para o segundo valor: ";
    $valor2_digitado = trim(fgets(STDIN));
    $valor2 = floatval($valor2_digitado);
}


$resultado = $valor1 / $valor2;

echo "O resultado da divisão de " . $valor1 . " por " . $valor2 . " é: " . $resultado . "\n";

?>