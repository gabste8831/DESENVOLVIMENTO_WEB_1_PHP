<?php

// prática 2
$SALARIO1 = 1000;
$SALARIO2 = 2000;

$SALARIO2 = $SALARIO1;

$SALARIO2 += 1;

$SALARIO1 *= 1.1;

echo "Valor Salário 1: $SALARIO1 Valor Salário 2: $SALARIO2<br>";

/* prática 3 */

if ($SALARIO1 > $SALARIO2) {
    echo "O valor de Salário 1 é Maior que Salário 2<br>";
} else {
    if ($SALARIO2 > $SALARIO1) {
        echo "O valor de Salário 2 é maior que o Salário 1<br>";
    } else {
        echo "Os valores são Iguais<br>";
    }
}

/* prática 4 */

for ($i = 0; $i < 100; $i++) { // Correção do loop
    $SALARIO1++;
    echo "<br>";
}

?>
