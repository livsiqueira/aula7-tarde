<?php
$numero1=(trim($_POST['numero1']));
$numero2=(trim($_POST['numero2']));

$soma = $numero1 + $numero2;

$subtracao = $numero1 - $numero2;

$multiplicacao = $numero1 * $numero2;

$divisao = $numero1 / $numero2;

$data = [
    'Soma' => $soma,
    'Divisao' => $divisao,
    'Subtracao' => $subtracao, 
    'Multiplicacao' => $multiplicacao
];

echo json_encode($data);