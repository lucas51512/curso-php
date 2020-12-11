<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('123.876.578-15'), 'Patricia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('157.869.137-18'), 'Marquinho'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
