<?php

require_once 'Pessoa.php';

$pessoas = new Pessoa();
$pessoas -> setPrimeiroNome('Gabriel');
$pessoas -> setUltimoNome('Moretto');
$pessoas -> setDataNascimento(new \DateTimeImmutable('1994-06-06')); //a

$idade = $pessoas -> getDataNascimento()->diff(new \DateTimeImmutable())->y;

echo "{$pessoas->getPrimeiroNome()} {$pessoas -> getUltimoNome()} tem $idade anos";