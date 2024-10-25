<?php
$host = 'localhost'; // Endereço do servidor PostgreSQL
$dbname = 'sistema_avaliacao'; // Nome do banco de dados
$user = 'postgres'; // Usuário do banco de dados
$password = 'postgres'; // Senha do banco de dados

try {
    // Estabelece a conexão com o banco de dados
    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão bem-sucedida!"; // Pode ser comentado ou removido em produção
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}

// Função para obter perguntas do banco de dados
function obterPerguntas() {
    global $conn; // Usa a variável de conexão global
    $query = "SELECT pergunta FROM perguntas"; // Consulta para obter as perguntas
    try {
        $stmt = $conn->query($query); // Executa a consulta
        $perguntas = $stmt->fetchAll(PDO::FETCH_COLUMN); // Obtém as perguntas como um array
        return $perguntas; // Retorna o array de perguntas
    } catch (PDOException $e) {
        echo "Erro na consulta: " . $e->getMessage(); // Tratamento de erro
        return []; // Retorna um array vazio em caso de erro
    }
}
?>
