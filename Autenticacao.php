<?php

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

include_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Titular('Mateus', new Cpf('123.456.789-99'), new Endereco('', '', '', ''));

echo $autenticador->tentarLogin($umDiretor, 'abcd');