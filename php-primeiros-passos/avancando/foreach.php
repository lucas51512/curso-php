<?php 

$contasCorrentes = [
    '123.456.789-10' => [
    'titular' => 'Vinicius',
    'saldo' => 1000
],
    '124.343.320-01' => [
    'titular' => 'Maria', 
    'saldos' => 10000
],
    '123.256.789-12' => [
    'titular' => 'Vinicius',
    'saldo' => 100
]

];
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
} 