<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Funcionario\Funcionario;

class EditorVideo extends Funcionario {

    public function calcularBonificacao() : float {
        return 600.0;
    }

}