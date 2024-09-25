<?php

// link
require_once 'funcoes.php';

// notas
$notas = [8, 6, 9, 7];

// faltas (cada posição representa um dia de aula)
$faltas = [0, 1, 2, 0, 0, 3, 1];

// número total de dias (ex: 20 dias de aula)
$totalDias = 20;

// cálculo da média das notas
$media = calcularMedia($notas);
echo "Média das Notas: " . $media . "<br>";
echo verificarAprovacaoNota($media) . "<br>";

// calcula a frequência
$frequencia = calcularFrequencia($faltas, $totalDias);
echo "Frequência: " . $frequencia . "%<br>";
echo verificarAprovacaoFrequencia($frequencia) . "<br>";
?>
