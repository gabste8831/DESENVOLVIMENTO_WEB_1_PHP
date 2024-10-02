<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // quantidades e preços
    $qtd_maca = (float)$_POST['maca_qtd'];
    $preco_maca = (float)$_POST['maca_preco'];

    $qtd_melancia = (float)$_POST['melancia_qtd'];
    $preco_melancia = (float)$_POST['melancia_preco'];

    $qtd_laranja = (float)$_POST['laranja_qtd'];
    $preco_laranja = (float)$_POST['laranja_preco'];

    $qtd_repolho = (float)$_POST['repolho_qtd'];
    $preco_repolho = (float)$_POST['repolho_preco'];

    $qtd_cenoura = (float)$_POST['cenoura_qtd'];
    $preco_cenoura = (float)$_POST['cenoura_preco'];

    $qtd_batatinha = (float)$_POST['batatinha_qtd'];
    $preco_batatinha = (float)$_POST['batatinha_preco'];

    // calculo do valor total
    $total = ($qtd_maca * $preco_maca) +
             ($qtd_melancia * $preco_melancia) +
             ($qtd_laranja * $preco_laranja) +
             ($qtd_repolho * $preco_repolho) +
             ($qtd_cenoura * $preco_cenoura) +
             ($qtd_batatinha * $preco_batatinha);

    // dinheiro disponivel, no caso 50 reais
    $dinheiro_disponivel = 50.00;

    // if para ver se o dinheiro é suficiente, sobra ou falta
    if ($total > $dinheiro_disponivel) {
        $mensagem = "O valor total da compra foi de R$ " . number_format($total, 2) . ". Joãozinho não tem dinheiro suficiente. Ele precisa de mais R$ " . number_format($total - $dinheiro_disponivel, 2) . ".";
        $classe_cor = 'vermelho';  // Mensagem em vermelho
    } elseif ($total < $dinheiro_disponivel) {
        $mensagem = "O valor total da compra foi de R$ " . number_format($total, 2) . ". Joãozinho ainda pode gastar R$ " . number_format($dinheiro_disponivel - $total, 2) . ".";
        $classe_cor = 'azul';  // Mensagem em azul
    } else {
        $mensagem = "O valor total da compra foi de R$ " . number_format($total, 2) . ". Joãozinho gastou todo o dinheiro disponível.";
        $classe_cor = 'verde';  // Mensagem em verde
    }

    // exibição da mensagem, pela cor correta
    echo "<html>
            <head>
                <link rel='stylesheet' href='style.css'>
            </head>
            <body>
                <h1 class='$classe_cor'>$mensagem</h1>
            </body>
          </html>";
}
?>
