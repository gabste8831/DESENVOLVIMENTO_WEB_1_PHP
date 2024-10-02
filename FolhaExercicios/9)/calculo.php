<?php
// moto à vista
$valorMoto = 8654.00;

// número de parcelas e taxa de juros inicial
$parcelas = [24, 36, 48, 60];
$taxaInicial = 2.0; // taxa inicial em %

foreach ($parcelas as $i => $numParcelas) {
    // taxa de juros para a opção de parcelamento
    $taxaJuros = $taxaInicial + ($i * 0.3); // aumenta 0,3% a cada nível
    $taxaJurosDecimal = $taxaJuros / 100; // convertendo para decimal

    // calculo do montante com juros compostos
    $montante = $valorMoto * pow((1 + $taxaJurosDecimal), $numParcelas);

    // calculo do valor da parcela
    $valorParcela = $montante / $numParcelas;

    // resultados
    echo "Valor total da moto financiada: R$ " . number_format($montante, 2, ',', '.') . "<br>";
    echo "Parcelas: $numParcelas vezes<br>";
    echo "Taxa de Juros: " . number_format($taxaJuros, 2, ',', '.') . "%<br>";
    echo "Valor da parcela: R$ " . number_format($valorParcela, 2, ',', '.') . "<br><br>";
}
?>
