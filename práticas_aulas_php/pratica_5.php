<?php

// Array com as disciplinas
$disciplinas = [
    "Banco de Dados", 
    "Estrutura de Dados", 
    "Administração de Sistemas de Informação", 
    "Engenharia de Software", 
    "Programação Web"
];

// Array com os professores
$professores = [
    "Marco", 
    "Bastos", 
    "Sandro", 
    "Julian", 
    "Cleber"
];

// Loop para exibir as disciplinas e os professores
for ($i = 0; $i < 5; $i++) {
    echo "Disciplina: " . $disciplinas[$i] . ", professor: " . $professores[$i] . ".<br>";
}

?>
