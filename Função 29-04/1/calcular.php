
<?php
function multiplicar($a, $b) {
    return $a * $b;
}

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$multiplicação = multiplicar($valor1, $valor2);

echo "A multiplicação entre $valor1 e $valor2 é: $multiplicação";
?>
