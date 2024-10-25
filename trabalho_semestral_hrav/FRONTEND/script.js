let perguntas = []; // agora as perguntas serão obtidas do banco de dados
let indiceAtual = 0; // controla o índice da pergunta atual
let respostas = []; // array que armazena as respostas dos usuários
let respostaSelecionada = null; // controla a resposta selecionada

// função para mostrar a avaliação e iniciar o questionário
function mostrarAvaliacao() {
    document.getElementById('welcome').style.display = 'none';
    document.getElementById('avaliacao').style.display = 'block';
    atualizarPergunta(); // mostra a primeira pergunta
}

// função para obter perguntas do servidor
function obterPerguntas() {
    fetch('obter_perguntas.php')
        .then(response => response.json())
        .then(data => {
            perguntas = data.map(item => item.pergunta); // ajusta a estrutura para seu uso
            atualizarPergunta(); // atualiza para exibir a primeira pergunta
        })
        .catch(error => console.error('Erro ao obter perguntas:', error));
}

// função para atualizar a pergunta exibida
function atualizarPergunta() {
    // Verifica se ainda há perguntas a serem exibidas
    if (perguntas.length === 0) {
        alert("Nenhuma pergunta disponível.");
        return;
    }
    
    document.getElementById('pergunta').innerText = perguntas[indiceAtual];

    // mostrar o botão de enviar só na última pergunta
    document.getElementById('btnEnviar').style.display = (indiceAtual === perguntas.length - 1) ? 'block' : 'none';

    // ocultar o botão de retroceder na primeira pergunta
    document.getElementById('btnRetroceder').style.display = (indiceAtual === 0) ? 'none' : 'block';

    // ocultar o botão de avançar na última pergunta, pois avançar e enviar são diferentes
    document.getElementById('btnAvancar').style.display = (indiceAtual === perguntas.length - 1) ? 'none' : 'block';

    // limpa a seleção anterior (zera as escolhas anteriores)
    document.querySelectorAll('.unidade').forEach(b => b.classList.remove('selecionado'));
    respostaSelecionada = null; // reinicia

    // limpa o campo de comentário
    document.getElementById('feedback').value = '';

    atualizarBotoes();
}

// estado dos botões, se podem ou n serem acionados
function atualizarBotoes() {
    document.getElementById('btnAvancar').disabled = respostaSelecionada === null; // Desabilitar avançar se nenhuma resposta for selecionada
    document.getElementById('btnEnviar').disabled = (indiceAtual === perguntas.length - 1 && respostaSelecionada === null); // Desabilitar enviar se nenhuma resposta for selecionada na última pergunta
}

// capturar o clique sobre as notas de 0 a 10
document.querySelectorAll('.unidade').forEach(function (button) {
    button.addEventListener('click', function () {
        // marca, e permite avançar
        respostaSelecionada = this.value;

        // remove a seleção anterior de todos os botões
        document.querySelectorAll('.unidade').forEach(b => b.classList.remove('selecionado'));

        // adiciona classe para a resposta selecionada
        this.classList.add('selecionado');

        atualizarBotoes();
    });
});

// função para avançar para a próxima pergunta
function avancarPergunta() {
    if (respostaSelecionada !== null) {
        respostas[indiceAtual] = respostaSelecionada; // armazena a resposta
        indiceAtual++;
        if (indiceAtual < perguntas.length) {
            atualizarPergunta();
        }
    } else {
        alert("Por favor, selecione uma resposta antes de avançar!");
    }
}

// função para voltar pra pergunta anterior
function retrocederPergunta() {
    if (indiceAtual > 0) {
        indiceAtual--; // retorna o índice (-1)
        respostaSelecionada = respostas[indiceAtual]; // retorna a resposta de antes
        atualizarPergunta(); // atualiza a pergunta a ser mostrada
    }
}

// função para finalizar a avaliação e capturar o feedback
function finalizarAvaliacao() {
    const feedback = document.getElementById('feedback').value;
    if (respostaSelecionada !== null) {
        respostas[indiceAtual] = respostaSelecionada; // Armazena a resposta da última pergunta
    }
    if (feedback) {
        respostas.push({ pergunta: "Comentários adicionais", resposta: feedback });
    }

    // Enviar dados para salvar_avaliacao.php
    fetch('salvar_avaliacao.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            respostas: respostas,
            feedback: feedback
        }),
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message); // Mensagem de sucesso ou erro
    })
    .catch(error => console.error('Erro ao salvar avaliação:', error));

    // Reinicia a avaliação
    indiceAtual = 0;
    respostas = [];
    respostaSelecionada = null;
    document.getElementById('feedback').value = ''; // limpa campo de feedback
    document.getElementById('avaliacao').style.display = 'none';
    document.getElementById('welcome').style.display = 'block';
}

// inicializa o questionário ao carregar a página
document.addEventListener('DOMContentLoaded', function () {
    obterPerguntas(); // Obtém as perguntas assim que a página é carregada
});
