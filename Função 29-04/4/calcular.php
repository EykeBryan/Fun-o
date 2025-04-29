<?php
function converterParaCelsius($a) {
    return ($a - 32) * 5 / 9;
}

$valor1 = $_POST['valor1'];

$converção = converterParaCelsius($valor1);

echo "A converção para celsius de  $valor1 é: $converção";
?>