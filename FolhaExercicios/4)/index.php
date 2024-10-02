<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo da Área do Retângulo</title>
</head>
<body>
    <form method="POST" action="calcula_area_retangulo.php">
        <label for="ladoA">Comprimento do lado A (em metros):</label>
        <input type="number" name="ladoA" required step="0.01">
        <br>
        <label for="ladoB">Comprimento do lado B (em metros):</label>
        <input type="number" name="ladoB" required step="0.01">
        <br>
        <button type="submit">Calcular Área</button>
    </form>
</body>
</html>
