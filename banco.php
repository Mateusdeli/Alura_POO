<?php

require_once 'autoload.php';

use Alura\Banco\Model\Conta\{Corrente, Poupanca, Titular};
use Alura\Banco\Model\{Cpf, Endereco};

$endereco = new Endereco('Tiete', 'Cohab', 'Joao Alves', '38');
$contaMateus = new Corrente(new Titular('Mateus', new Cpf('455.112.223-55'), $endereco));
$contaPatricia = new Poupanca(new Titular('Patricia', new Cpf('123.111.233-54'), $endereco));

$contaMateus->depositar(500);
$contaMateus->sacar(100);

// echo 'NOME: ' . $contaMateus->getTitular()->getNome() .  PHP_EOL;
// echo 'CPF: ' . $contaMateus->getTitular()->getCpf()->getCpf() .  PHP_EOL;

// echo 'NOME: ' . $contaPatricia->getTitular()->getNome() .  PHP_EOL;
// echo 'CPF: ' . $contaPatricia->getTitular()->getCpf()->getCpf() .  PHP_EOL;
echo $contaMateus->getSaldo();



