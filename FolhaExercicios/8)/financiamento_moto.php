<?php
// valor da moto a vista
$valorMoto = 8654.00;

// número de parcelas e taxa de juros inicial
$parcelas = [24, 36, 48, 60];
$taxaInicial = 1.5; // taxa inicial em porcentagem

foreach ($parcelas as $i => $numParcelas) {
    // taxa de juros para a opção de parcelamento
    $taxaJuros = $taxaInicial + ($i * 0.5); // aumenta 0,5% a cada nível

    // calculo do montante total financiado com juros simples
    $montante = $valorMoto + ($valorMoto * ($taxaJuros / 100) * $numParcelas);

    // calculo do valor da parcela
    $valorParcela = $montante / $numParcelas;

    // resultados
    echo "Valor total da moto financiada: R$ " . number_format($montante, 2, ',', '.') . "<br>";
    echo "Parcelas: $numParcelas vezes<br>";
    echo "Taxa de Juros: " . number_format($taxaJuros, 2, ',', '.') . "%<br>";
    echo "Valor da parcela: R$ " . number_format($valorParcela, 2, ',', '.') . "<br><br>";
}
?>
