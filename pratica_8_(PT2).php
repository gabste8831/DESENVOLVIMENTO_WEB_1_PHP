<?php
// pastas
$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb",
            "bancoDados 1",
            "engSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web",
            "bancoDados 2",
            "engSoft 2"
        )
    )
);

// function para exibir a estrutura de pastas
function exibirEstruturaPastas($estrutura, $nivel = 0) {
    foreach ($estrutura as $nome => $conteudo) {
        // Exibe o nome da pasta com o nível de recuo
        echo str_repeat("--", $nivel) . $nome . "<br>";
        
        // Se o conteúdo for um array, chama a função recursivamente
        if (is_array($conteudo)) {
            exibirEstruturaPastas($conteudo, $nivel + 1);
        }
    }
}

// chamando a function
exibirEstruturaPastas($pastas);
?>
