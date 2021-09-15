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

    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getConta()
    {
        return $this->conta;
    }

    public function setConta($conta)
    {
        $this->conta = $conta;
    }
}

$obj = new Conta;

$obj->setConta($_POST['conta']);
$obj->setAgencia($_POST['agencia']);
$obj->setCliente($_POST['cliente']);


$payload = [
    'error' => false,
    'msg' => 'Conta aberta com sucesso!'
];

header('Content-Type: application/json; charset=utf-8');
echo json_encode($payload);
