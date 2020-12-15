<?php

use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Funcionario\Desenvolvedor;

$key = sodium_crypto_secretbox('Mateus Lindo Demais', random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES), random_bytes(SODIUM_CRYPTO_AUTH_BYTES));

echo $key;

require_once 'autoload.php';
$dev = new Desenvolvedor('Mateus', new Cpf('455.554.112-22'), 1550);

echo $dev->nome;