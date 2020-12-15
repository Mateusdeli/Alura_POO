<?php

namespace Alura\Banco\Model;

use Alura\Banco\Model\Cpf;

abstract class Pessoa {

    use AcessoPropriedades;

    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf) {
        $this->validarNome($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function getCpf() : Cpf {
        return $this->cpf;
    }

    final protected function validarNome(string $nome) {
        if (strlen($nome) < 5) {
            echo "O Nome do Titular precisa ter no minimo 5 caracteres.";
            exit();
        }
    }

}