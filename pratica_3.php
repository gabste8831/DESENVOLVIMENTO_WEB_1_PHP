<?php

//prática 2
$SALARIO1 = 1000;
$SALARIO2 = 2000;

$SALARIO2 = $SALARIO1;

$SALARIO2 += 1;

$SALARIO1 *= 1.1;

echo "Valor Salário 1: $SALARIO1 Valor Salário 2: $SALARIO2";

/* echo seria um "mostrar" */
/* ações de atribuição, '=='... parecidas ao javascript (operadores de comparação, atribuição...) */

/*prática 3*/

if($SALARIO1 > $SALARIO2) {
    echo "O valor de Salário 1 é Maior que Salário 2";
     } else {
        if($SALARIO2 > $SALARIO1) {
            echo"O valor de Salário 2 é maior que o Salário 1";
    } else {
            echo"Os valores são Iguais";
        }
     }
?>
