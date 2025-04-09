<?php


function lerNotaValida($mensagem) {
    while (true) {
        echo $mensagem;
        $nota = floatval(trim(fgets(STDIN)));
        if ($nota >= 0 && $nota <= 10) {
            return $nota;
        } else {
            echo "VALOR INVÁLIDO! Digite uma nota entre 0 e 10.\n";
        }
    }
}


$nota1 = lerNotaValida("Digite a primeira nota (0 a 10): ");


$nota2 = lerNotaValida("Digite a segunda nota (0 a 10): ");


$media = ($nota1 + $nota2) / 2;


echo "A média do aluno é: " . $media . "\n";

?>