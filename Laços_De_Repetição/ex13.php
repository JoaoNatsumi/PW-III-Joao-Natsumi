<?php


while (true) {
    echo "Digite um valor inteiro entre 1 e 10 para ver sua tabuada: ";
    $numero = intval(trim(fgets(STDIN)));

    if ($numero >= 1 && $numero <= 10) {
        break; 
    } else {
        echo "VALOR INVÁLIDO! Digite um valor entre 1 e 10.\n";
    }
}

echo "\nTabuada do " . $numero . ":\n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo $numero . " x " . $i . " = " . $resultado . "\n";
}

?>