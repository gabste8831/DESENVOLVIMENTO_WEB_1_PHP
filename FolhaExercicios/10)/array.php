<?php
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
// function recursiva para imprimir a árvore
function printTree($array, $nivel = 0) {
    foreach ($array as $chave => $valor) {
        // se for um array, entra nele recursivamente
        if (is_array($valor)) {
            echo str_repeat("-", $nivel) . " " . $chave . "<br>";
            // chama a função recursivamente para os valores internos
            printTree($valor, $nivel + 2);
        } else {
            // mostra o valor
            echo str_repeat("-", $nivel) . " " . $valor . "<br>";
        }
    }
}

// estrutura de visualização
$pastas = array(
    "bsn" => array(
        "3a Fase" => array("desenvWeb", "bancoDados 1", "engSoft 1"),
        "4a Fase" => array("Intro Web", "bancoDados 2", "engSoft 2")
    )
);

printTree($pastas);
?>  
