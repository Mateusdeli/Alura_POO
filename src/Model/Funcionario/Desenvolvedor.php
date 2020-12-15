<?php

namespace Alura\Banco\Model\Funcionario;

class Desenvolvedor extends Funcionario {

    public function calcularBonificacao(): float {
        return 500.0;
    }

    public function subirNivel()
    {
        parent::receberAumento(parent::getSalario() + 0.75);
    }

}