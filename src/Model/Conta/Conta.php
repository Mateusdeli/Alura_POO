<?php

    namespace Alura\Banco\Model\Conta;

    abstract class Conta {

        private Titular $titular;
        private float $saldo;
        private static int $numeroContas = 0;

        public function __construct(Titular $titular) {

            $this->titular = $titular;
            $this->saldo = 0;

            self::$numeroContas++;
        }

        public function sacar(float $valor) : void
        {
            $tarifaSaque = $valor * $this->percentualTarifa();
            $valorSaque = $valor + $tarifaSaque; 
            if ($valorSaque > $this->saldo) {
                echo 'Você não pode sacar este valor';
                return;
            }

            $this->saldo -= $valorSaque;
        }

        public function getTitular() : Titular {
            return $this->titular;
        }

        public function depositar(float $valor) : void
        {
            if ($valor < 0) {
                echo 'Você só pode depositar um valor positivo';
                return;
            }

            $this->saldo += $valor;
        }

        public function transferir(Conta $conta, $valor)
        {
            if ($valor > $this->saldo || $valor < 0) {
                echo 'Você não pode transferir este valor';
                return;
            }

            $this->sacar($valor);
            $conta->depositar($valor);
        }

        public function getSaldo() : float {
            return $this->saldo;
        }

        public static function getNumeroContas() : int {
            return self::$numeroContas;
        }

        abstract protected function percentualTarifa() : float;

    }