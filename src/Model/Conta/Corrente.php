<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Conta\Conta;

class Corrente extends Conta {

    public function __construct(Titular $titular) {
        parent::__construct($titular);
    }

    public function percentualTarifa() : float
    {
        return 0.05;
    }


}