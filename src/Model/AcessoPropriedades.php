<?php

namespace Alura\Banco\Model;

trait AcessoPropriedades {

    function __get($name)
    {
        $metodo = "get" . ucfirst($name);
        return $this->$metodo();
    }

    function __set($name, $value)
    {
        $metodo = "set" . ucfirst($name);
        return $this->$metodo($value);
    }

}