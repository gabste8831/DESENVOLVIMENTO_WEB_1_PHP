<?php
// cálculo da média das notas
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

// cálculo da frequência do aluno
function calcularFrequencia($faltas, $totalDias) {
    $totalFaltas = array_sum($faltas); // Soma todas as faltas
    $frequencia = (($totalDias - $totalFaltas) / $totalDias) * 100; // cálculo da frequência em porcentagem
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
?>
