<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo da Área do Triângulo Retângulo</title>
</head>
<body>
    <h1>Calcular a Área de um Triângulo Retângulo</h1>
    <form method="POST" action="calculo_area_triangulo.php">
        <label for="base">Base (em metros):</label>
        <input type="number" name="base" step="0.01" required>
        <br><br>
        <label for="altura">Altura (em metros):</label>
        <input type="number" name="altura" step="0.01" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
