<?php
function maiorNumero($a, $b, $c){
    return max($a, $b, $c);
    
}
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];
$maior = maiorNumero($valor1, $valor2, $valor3);

echo "O maior numero entre $valor1, $valor2 e $valor3 é: $maior";
?>