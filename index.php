<?php

class Conta
{
    private $agencia = '0001';
    private $conta;
    private $cliente;

    public function getAgencia()
    {
        return $this->agencia;
    }
}

$obj = new Conta;
echo $obj->getAgencia();
