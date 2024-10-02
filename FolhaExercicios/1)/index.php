<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Três Valores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calcular a Soma de Três Valores</h1>
    <form action="process.php" method="POST">
        <label for="valor1">Primeiro Valor:</label>
        <input type="number" name="valor1" id="valor1" required>
        <br>
        <label for="valor2">Segundo Valor:</label>
        <input type="number" name="valor2" id="valor2" required>
        <br>
        <label for="valor3">Terceiro Valor:</label>
        <input type="number" name="valor3" id="valor3" required>
        <br>
        <button type="submit">Calcular Soma</button>
    </form>
</body>
</html>
