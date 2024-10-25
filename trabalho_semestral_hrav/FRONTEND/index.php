<?php
// Conexão com o banco de dados
$host = 'localhost'; // Endereço do servidor PostgreSQL
$dbname = 'sistema_avaliacao'; // Nome do banco de dados
$user = 'postgres'; // Usuário do banco de dados
$password = 'postgres'; // Senha do banco de dados

try {
    // Estabelece a conexão com o banco de dados
    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}

// Função para obter perguntas do banco de dados
function obterPerguntas() {
    global $conn; // Usa a variável de conexão global
    $query = "SELECT texto FROM perguntas"; // Consulta para obter as perguntas
    try {
        $stmt = $conn->query($query); // Executa a consulta
        $perguntas = $stmt->fetchAll(PDO::FETCH_COLUMN); // Obtém as perguntas como um array
        return $perguntas; // Retorna o array de perguntas
    } catch (PDOException $e) {
        echo "Erro na consulta: " . $e->getMessage(); // Tratamento de erro
        return []; // Retorna um array vazio em caso de erro
    }
}

// Obtém as perguntas do banco de dados
$perguntas = obterPerguntas();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Avaliação de Prestação de Serviços HRAV</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <script>
        let perguntas = <?php echo json_encode($perguntas); ?>; // Converte as perguntas para JavaScript
        let indiceAtual = 0; // Indice da pergunta atual

        function mostrarAvaliacao() {
            document.getElementById('welcome').style.display = 'none';
            document.getElementById('avaliacao').style.display = 'block';
            mostrarPergunta();
        }

        function mostrarPergunta() {
            if (indiceAtual < perguntas.length) {
                document.getElementById('pergunta').innerText = perguntas[indiceAtual]; // Exibe a pergunta atual
            }
        }

        function avancarPergunta() {
            if (indiceAtual < perguntas.length - 1) {
                indiceAtual++; // Incrementa o índice da pergunta atual
                mostrarPergunta(); // Mostra a próxima pergunta
            } else {
                document.getElementById('btnAvancar').style.display = 'none'; // Oculta o botão de avançar se for a última pergunta
                document.getElementById('btnEnviar').style.display = 'block'; // Mostra o botão de enviar
            }
        }

        function retrocederPergunta() {
            if (indiceAtual > 0) {
                indiceAtual--; // Decrementa o índice da pergunta atual
                mostrarPergunta(); // Mostra a pergunta anterior
            }
            if (indiceAtual === 0) {
                document.getElementById('btnRetroceder').style.display = 'none'; // Oculta o botão de retroceder na primeira pergunta
            }
        }

        function finalizarAvaliacao() {
            alert('Avaliação enviada!'); // Exibe uma mensagem de confirmação
        }
    </script>
</head>

<body>
    <!-- Seção de Boas-vindas -->
    <section id="welcome">
        <h1 class="titulo">Bem-vindo ao Sistema de Avaliação do HRAV</h1>
        <p class="subtitulo">Clique no botão para iniciar sua avaliação.</p>
        <button class="btn" id="btnIniciar" onclick="mostrarAvaliacao()">Iniciar Avaliação</button>
    </section>

    <!-- Seção de Avaliação -->
    <section id="avaliacao" style="display:none;">
        <form id="formAvaliacoes">
            <?php if (empty($perguntas)): ?>
                <p class="titulo">Nenhuma pergunta disponível para avaliação.</p>
                <button class="btn" type="button" onclick="alert('Não há perguntas disponíveis!')">Voltar</button>
            <?php else: ?>
                <p class="titulo" id="pergunta"></p>
                <div class="botoes_avaliacao">
                    <input class="unidade" type="button" value="1">
                    <input class="unidade" type="button" value="2">
                    <input class="unidade" type="button" value="3">
                    <input class="unidade" type="button" value="4">
                    <input class="unidade" type="button" value="5">
                    <input class="unidade" type="button" value="6">
                    <input class="unidade" type="button" value="7">
                    <input class="unidade" type="button" value="8">
                    <input class="unidade" type="button" value="9">
                    <input class="unidade" type="button" value="10">
                </div>
                <div class="btn_container">
                    <button class="btn" type="button" id="btnRetroceder" onclick="retrocederPergunta()" style="display:none;">Retroceder</button>
                    <button class="btn" type="button" id="btnAvancar" onclick="avancarPergunta()">Avançar</button>
                    <button class="btn" type="button" id="btnEnviar" style="display:none;" onclick="finalizarAvaliacao()">Enviar Avaliação</button>
                </div>

                <p class="comentario">Comentários adicionais (opcional):</p>
                <textarea id="feedback" rows="4" cols="50"></textarea>
            <?php endif; ?>
        </form>
        <footer>
            <p class="mensagem_footer">Sua avaliação espontânea é anônima, nenhuma informação pessoal é solicitada ou armazenada.</p>
        </footer>
    </section>

</body>

</html>
