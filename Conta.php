<?php

class Conta
{
    private $agencia = '0001';
    private $conta;
    private $cliente;
    private $valor;

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

    public function getValor()
    {
        return $this->valor;
    }

    private function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function deposito($valor)
    {
        if ($valor > 0) {
            $this->setValor($this->getValor() + $valor);
        }
        return;
    }
}

$obj = new Conta;

$obj->setConta($_POST['conta']);
$obj->setAgencia($_POST['agencia']);
$obj->setCliente($_POST['cliente']);

$obj->deposito((float) $_POST['valor']);

$payload = [
    'error' => false,
    'msg' => 'Conta aberta com sucesso!',
    'data' => [
        'conta' => $obj->getConta(),
        'agencia' => $obj->getAgencia(),
        'cliente' => $obj->getCliente(),
        'valor' => $obj->getValor(),
    ]
];

header('Content-Type: application/json; charset=utf-8');
echo json_encode($payload);
