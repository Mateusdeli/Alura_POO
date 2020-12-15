<?php

require_once 'autoload.php';

use Alura\Banco\Service\CalcularBonificacao;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Funcionario\Desenvolvedor;
use Alura\Banco\Model\Funcionario\Gerente;

$umFuncionario = new Desenvolvedor('Mateus', new Cpf('455.112.332-55'), 1000);
$umaFuncionaria = new Gerente('Ana Paula', new Cpf('125.892.212-35'), 3000);

$bonificacoes = new CalcularBonificacao();
$umFuncionario->subirNivel();
$bonificacoes->calcularTotalBonificacao($umFuncionario);
$bonificacoes->calcularTotalBonificacao($umaFuncionaria);

echo $bonificacoes->getBonificacoes();
