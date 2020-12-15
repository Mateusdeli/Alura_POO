<?php

namespace Alura\Banco\Model\Funcionario\Interfaces;

interface IAutenticavel {

    public function podeAutenticar(string $senha) : bool;
    
}