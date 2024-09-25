<?php
// notas
$notas = [8, 6, 9, 7];

// faltas (cada posição representa um dia de aula)
$faltas = [0, 1, 2, 0, 0, 3, 1];

//-----------------------------------------------------------------------//

// calculo da média das notas
function calcularMedia($notas) {
    $soma = array_sum($notas); // soma todas as notas
    $totalNotas = count($notas); // conta o número de notas
    return $soma / $totalNotas; // retorna a média
}

// verificação da aprovação por nota
function verificarAprovacaoNota($media) {
    if ($media >= 7) {
        return "Aprovado por Nota";
    } else {
        return "Reprovado por Nota";
    }
}

// calculo da frequência do aluno
function calcularFrequencia($faltas, $totalDias) {
    $totalFaltas = array_sum($faltas); // Soma todas as faltas
    $frequencia = (($totalDias - $totalFaltas) / $totalDias) * 100; // calculo da frequencia em porcentagem
    return $frequencia; // retorna a frequência
}

// verificação da aprovação por frequência
function verificarAprovacaoFrequencia($frequencia) {
    if ($frequencia > 70) {
        return "Aprovado por Frequência";
    } else {
        return "Reprovado por Frequência";
    }
}

// número total de dias (ex: 20 dias de aula)
$totalDias = 20;

// calculo da média das notas
$media = calcularMedia($notas);
echo "Média das Notas: " . $media . "<br>";
echo verificarAprovacaoNota($media) . "<br>";

// Calcula a frequência
$frequencia = calcularFrequencia($faltas, $totalDias);
echo "Frequência: " . $frequencia . "%<br>";
echo verificarAprovacaoFrequencia($frequencia) . "<br>";
?>
