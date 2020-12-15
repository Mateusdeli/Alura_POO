<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Interfaces\IAutenticavel;

class Autenticador {

    public function tentarLogin(IAutenticavel $autenticavel, string $senha) : string
    {
        return $autenticavel->podeAutenticar($senha) ? 'Ok, Usuario logado no sistema' : 'Senha incorreta.';
    }

}