<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo da Área do Quadrado</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <form method="POST" action="calcula_area.php">
        <label for="lado">Comprimento do lado do quadrado (em metros):</label>
        <input type="number" name="lado" required step="0.01">
        <br>
        <button type="submit">Calcular Área</button>
    </form>
</body>
</html>
