<?php

/**
 * Várias linhas
 **/
$agencia = "00001\r\n"; // string
$conta = '35665-1'; // string
$valor = 500.50; // float
$id = 1; // integer
$cliente = "Luiz Lins Monteiro Junior"; // String

$piaui = 'Piauí';
$ceara = 'Ceará';
$maranhao = 'Maranhão';

echo "$piaui\r\n";

//Array
$estados = [
    'Piauí' => ['Parnaíba', 'Luís Correia'],
    'Ceará' => ['Jericoacora', 'Bitupitá'],
    'Maranhão' => ['Rosário', 'São Luís'],
];

echo $estados['Maranhão'][0] . "\r\n";

// echo implode(', ', $estados) . "\r\n";

echo $agencia;
echo $conta;
