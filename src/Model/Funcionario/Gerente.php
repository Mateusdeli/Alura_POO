<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Funcionario\Interfaces\IAutenticavel;

class Gerente extends Funcionario implements IAutenticavel {

    public function calcularBonificacao(): float {
        return parent::getSalario();
    }

    public function podeAutenticar(string $senha) : bool {

        return $senha === "4321";

    }

}