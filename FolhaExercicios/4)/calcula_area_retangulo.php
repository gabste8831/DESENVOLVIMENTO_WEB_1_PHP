<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cálculo da Área do Retângulo</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // recebimento dos valores preenchidos no formulário
        $ladoA = isset($_POST['ladoA']) ? (float)$_POST['ladoA'] : 0;
        $ladoB = isset($_POST['ladoB']) ? (float)$_POST['ladoB'] : 0;

        // cálculo da área do retângulo
        $area = $ladoA * $ladoB;

        // exibindo o resultado com a tag apropriada
        if ($area > 10) {
            echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é " . number_format($area, 2) . " metros quadrados.</h1>";
        } else {
            echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é " . number_format($area, 2) . " metros quadrados.</h3>";
        }
    } else {
        echo "<h2>Por favor, envie os valores pelo formulário.</h2>";
    }
    ?>
    <br>
    <a href="index.php">Voltar</a> 
</body>
</html>
