<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario\Funcionario;

class CalcularBonificacao {

    private float $totalBonificacao = 0;

    public function calcularTotalBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacao += $funcionario->calcularBonificacao();
    }

    public function getBonificacoes() : float
    {
        return $this->totalBonificacao;
    }

}