<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$gabriel = new Titular(new CPF('123.235.789-10'), 'Gabriel');
$primeiraConta = new Conta($gabriel);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Titular(new CPF('698.549.548-10'), 'Alessandra');
var_dump($segundaConta);

$outra = new Titular(new CPF('123'), 'Abcdefg');
echo Conta::recuperaNumeroDeContas();