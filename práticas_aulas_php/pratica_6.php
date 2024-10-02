<?php

// Declaração da matriz multidimensional com quatro disciplinas
$dados = [
    ["Disciplina" => "Matemática", "Faltas" => 5, "Média" => 8.5],
    ["Disciplina" => "Português", "Faltas" => 2, "Média" => 9.0],
    ["Disciplina" => "Geografia", "Faltas" => 10, "Média" => 6.0],
    ["Disciplina" => "Educação Física", "Faltas" => 2, "Média" => 8.0]
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Disciplinas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Tabela de Disciplinas</h2>

<table>
    <thead>
        <tr>
            <th>Disciplina</th>
            <th>Faltas</th>
            <th>Média</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dados as $item): ?>
        <tr>
            <td><?php echo htmlspecialchars($item["Disciplina"]); ?></td>
            <td><?php echo htmlspecialchars($item["Faltas"]); ?></td>
            <td><?php echo htmlspecialchars($item["Média"]); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
