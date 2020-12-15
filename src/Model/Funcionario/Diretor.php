<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Funcionario\Interfaces\IAutenticavel;

class Diretor extends Funcionario implements IAutenticavel {

    public function calcularBonificacao(): float {
        return parent::getSalario() * 2;
    }

    public function podeAutenticar(string $senha) : bool
    {
        return $senha === "1234";
    }

}