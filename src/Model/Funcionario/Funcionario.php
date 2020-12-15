<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Pessoa;

abstract class Funcionario extends Pessoa {

    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario) {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function getSalario() : float
    {
        return $this->salario;
    }

    public function alterarNome($nome)
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }

    abstract function calcularBonificacao() : float;

    public function receberAumento($valorAumento)
    {

        if ($valorAumento < 0) {
            echo "O valor do aumento precisa ser positivo!";
            return;
        }

        $this->salario += $valorAumento;
    }

}