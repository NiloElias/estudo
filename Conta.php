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

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }
}

$obj = new Conta;
$obj->setCliente('Luiz Lins Monteiro Junior');
echo $obj->getAgencia() . "\r\n";
echo $obj->getCliente() . "\r\n";
