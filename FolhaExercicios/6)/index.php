<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Feira de Joãozinho</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <h1>Feira de Joãozinho</h1>
    <form method="POST" action="calculo.php">
        <h2>Maçã</h2>
        <label for="maca_qtd">Quantidade (Kg):</label>
        <input type="number" name="maca_qtd" step="0.1" required>
        <label for="maca_preco">Preço por Kg (R$):</label>
        <input type="number" name="maca_preco" step="0.01" required>
        <br>
        
        <h2>Melancia</h2>
        <label for="melancia_qtd">Quantidade (Kg):</label>
        <input type="number" name="melancia_qtd" step="0.1" required>
        <label for="melancia_preco">Preço por Kg (R$):</label>
        <input type="number" name="melancia_preco" step="0.01" required>
        <br>
        
        <h2>Laranja</h2>
        <label for="laranja_qtd">Quantidade (Kg):</label>
        <input type="number" name="laranja_qtd" step="0.1" required>
        <label for="laranja_preco">Preço por Kg (R$):</label>
        <input type="number" name="laranja_preco" step="0.01" required>
        <br>
        
        <h2>Repolho</h2>
        <label for="repolho_qtd">Quantidade (Kg):</label>
        <input type="number" name="repolho_qtd" step="0.1" required>
        <label for="repolho_preco">Preço por Kg (R$):</label>
        <input type="number" name="repolho_preco" step="0.01" required>
        <br>
        
        <h2>Cenoura</h2>
        <label for="cenoura_qtd">Quantidade (Kg):</label>
        <input type="number" name="cenoura_qtd" step="0.1" required>
        <label for="cenoura_preco">Preço por Kg (R$):</label>
        <input type="number" name="cenoura_preco" step="0.01" required>
        <br>
        
        <h2>Batatinha</h2>
        <label for="batatinha_qtd">Quantidade (Kg):</label>
        <input type="number" name="batatinha_qtd" step="0.1" required>
        <label for="batatinha_preco">Preço por Kg (R$):</label>
        <input type="number" name="batatinha_preco" step="0.01" required>
        <br>
        
        <button type="submit">Calcular Total</button>
    </form>
</body>
</html>
