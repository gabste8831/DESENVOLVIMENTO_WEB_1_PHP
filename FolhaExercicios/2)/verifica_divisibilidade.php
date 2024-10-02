<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Divisibilidade</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $numero = isset($_POST['numero']) ? (float)$_POST['numero'] : 0;

        
        if ($numero % 2 == 0) {
            echo "<h2>Valor divisível por 2</h2>";
        } else {
            echo "<h2>O valor não é divisível por 2</h2>";
        }
    } else {
        echo "<h2>Por favor, envie um número pelo formulário.</h2>";
    }
    ?>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
