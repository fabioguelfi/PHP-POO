<?php

class ContaBanco
{
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;



    // Metodos
    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);
        if($tipo == "CC"){
            $this->setSaldo(50);
        } elseif ($tipo == "CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo '<p>Conta ainda tem erro, não posso fechá-la</p>';
        } elseif ($this->getSaldo() < 0){
            echo '<p>Conta está em debito, impossivel encerrar</p>';
        } else {
            $this->setStatus(false);
            echo "<p>Conta do " . $this->getDono() . " fechada com sucesso</p>";
        }
    }
    public function depositar($v){
        if($this->getStatus() == true){
           $this->setSaldo($this->getSaldo() + $v);
           echo "<p>Deposito de R$ $v na conta de " . $this->getDono() . "</p>";
        } else {
            echo '<p>Conta Fechada</p>';
        }
    }
    public function sacar($v){
        if($this->getStatus() == true){
            if ($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de $v autorizado na conta de " . $this->getDono() . "</p>";
            } else {
                echo '<p>Saldo Insuficiente</p>';
            }
        } else {
            echo '<p>Não Posso Sacar de uma conta fechada</p>';
        }
    }
    public function pagarMensal(){
        if ($this->getTipo() == "CC"){
            $v = 12;
        } elseif ($this->getTipo() == "CP"){
            $v = 20;
        }
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada na conta de " . $this->getDono() . "</p>";
        } else {
            echo '<p>Problemas com a Conta</p>';
        }
    }

    // Metodos Especiais
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo '<p>Conta Criado com Sucesso!</p>';
    }

    // Metodos Getters - Setters

    // NumConta
    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($n)
    {
        return $this->numConta = $n;
    }

    // Tipo
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($t)
    {
        return $this->tipo = $t;
    }

    // Dono
    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($d)
    {
        return $this->dono = $d;
    }

    // Saldo
    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($s)
    {
        return $this->saldo = $s;
    }

    //status
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($s)
    {
        return $this->status = $s;
    }
}