<?php
function parOuImpar($a){
    if ($a % 2 === 0) {
        return "Par";
    } else {
        return "Ímpar";
    }
}
$valor1 = $_POST['valor1'];
$parouimpar = parOuImpar($valor1);

echo "O numero $valor1 é: $parouimpar";
?>