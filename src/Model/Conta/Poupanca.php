<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Conta\Conta;

class Poupanca extends Conta {

    public function __construct(Titular $titular) {
        parent::__construct($titular);
    }

    public function percentualTarifa() : float
    {
        return 0.03;
    }


}