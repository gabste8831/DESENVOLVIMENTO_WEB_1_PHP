<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Soma</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <form method="POST" action="">
        <label for="valor1">Valor 1:</label>
        <input type="number" name="valor1" required>
        <br>
        <label for="valor2">Valor 2:</label>
        <input type="number" name="valor2" required>
        <br>
        <label for="valor3">Valor 3:</label>
        <input type="number" name="valor3" required>
        <br>
        <button type="submit">Calcular Soma</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // recebimento dos valores preenchidos no formulário
        $valor1 = isset($_POST['valor1']) ? (float)$_POST['valor1'] : 0;
        $valor2 = isset($_POST['valor2']) ? (float)$_POST['valor2'] : 0;
        $valor3 = isset($_POST['valor3']) ? (float)$_POST['valor3'] : 0;

        $soma = $valor1 + $valor2 + $valor3;

        // cor ideal
        if ($valor1 > 10) {
            $cor = 'blue'; // azul se for maior que 10
        } elseif ($valor2 < $valor3) {
            $cor = 'green'; // verde se o valor2 < valor3
        } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            $cor = 'red'; // vermelho se valor3 < valor1 e valor2
        } else {
            $cor = 'black'; // cor padrão se nenhuma condição for atendida
        }

        // mostrar resultado com a cor certa utilizando classes CSS
        echo "<h2 class='$cor'>Resultado da soma: " . number_format($soma, 2) . "</h2>";
    } else {
        echo "<h2>Por favor, envie os dados pelo formulário.</h2>";
    }
    ?>
</body>
</html>
