<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Área do Triângulo</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // recebe os valor base e altura do triangulo
        $base = isset($_POST['base']) ? (float)$_POST['base'] : 0;
        $altura = isset($_POST['altura']) ? (float)$_POST['altura'] : 0;

        // calculo
        $area = ($base * $altura) / 2;

        // mostra resultado
        echo "<h2>A área do triângulo retângulo com base {$base} metros e altura {$altura} metros é {$area} metros quadrados.</h2>";
    } else {
        echo "<h2>Por favor, envie os dados pelo formulário.</h2>";
    }
    ?>
</body>
</html>
