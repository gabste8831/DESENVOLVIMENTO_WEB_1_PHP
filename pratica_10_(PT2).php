<?php
// função para calcular o valor final com desconto
function calcularDesconto($valor, $desconto) {
    // Verifica se os parâmetros são válidos
    if ($valor <= 0 || $desconto < 0) {
        throw new Exception("Parâmetros inválidos");
    }
    
    // cálculo do valor final
    return $valor - ($valor * ($desconto / 100));
}

try {
    // captura de dados via QueryString e validação
    $valor = isset($_REQUEST['valor']) ? floatval($_REQUEST['valor']) : 0;
    $desconto = isset($_REQUEST['desconto']) ? floatval($_REQUEST['desconto']) : 0;

    // Calculando o valor final
    $valorFinal = calcularDesconto($valor, $desconto);
    echo "Valor final com desconto: R$ " . number_format($valorFinal, 2, ',', '.');
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>
