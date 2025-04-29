<?php
function validarIdade($a) {
    if ($a < 18) {
        return "Menor de idade";
    } elseif ($a >= 60) {
        return "Idoso";
    } else {
        return "Adulto";
    }
}

$valor1 = $_POST['valor1'];

$validar = validarIdade($valor1);

echo "com essa idade $valor1 você é: $validar";
?>