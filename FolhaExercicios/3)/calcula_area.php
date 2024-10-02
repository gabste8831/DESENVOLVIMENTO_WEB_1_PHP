<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cálculo da Área</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // recebe o valor
        $lado = isset($_POST['lado']) ? (float)$_POST['lado'] : 0;

        // calculo
        $area = $lado * $lado;

        // Emostrar resultado
        echo "<h2>A área do quadrado de lado $lado metros é " . number_format($area, 2) . " metros quadrados</h2>";
    } else {
        echo "<h2>Por favor, envie o comprimento do lado pelo formulário.</h2>";
    }
    ?>
    <br>
    <a href="index.php">Voltar</a> 
</body>
</html>
