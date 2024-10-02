<?php
// valores
$valor_carro_vista = 22500.00; // Valor à vista do carro
$valor_parcela = 489.65;        // Valor de cada parcela
$numero_parcelas = 60;          // Número de parcelas

// total gasto no financiamento
$total_financiado = $valor_parcela * $numero_parcelas;

// calculando os juros
$juros = $total_financiado - $valor_carro_vista;

// Exibindo os resultados
echo "Valor à vista do carro: R$ " . number_format($valor_carro_vista, 2, ',', '.') . "<br>";
echo "Total gasto no financiamento: R$ " . number_format($total_financiado, 2, ',', '.') . "<br>";
echo "Valor gasto em juros: R$ " . number_format($juros, 2, ',', '.') . "<br>";
?>

<!-- Programa sem necessidade de interação... só calcula -->
