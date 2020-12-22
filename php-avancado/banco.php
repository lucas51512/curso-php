<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Assis', 'Vila Direita', 'João Carlos', '001');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('123.876.578-15'), 'Patricia', new Endereco('Assis', 'Vila Central', 'João Pessoa', '879'));
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('157.869.137-18'), 'Marquinho', new Endereco('Assis', 'Santa Cecília', 'André Períne', '665')));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
