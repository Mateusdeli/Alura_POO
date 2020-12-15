<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Funcionario\Interfaces\IAutenticavel;
use Alura\Banco\Model\Pessoa;

class Titular extends Pessoa implements IAutenticavel {

    private Endereco $endereco;

    public function __construct(string $nome, Cpf $cpf, Endereco $endereco) 
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco() : Endereco 
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha) : bool 
    {
        return $senha === 'abcd';
    }

}