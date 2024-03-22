<?php
//exemplo classe.php
class Veiculo
{
    //metodo é função  - propriedade é variavel
    protected $velocidade = 0;
    //private nãao pode ser herdado
    protected $rodas;
    protected $ligado;

    public function ligar()
    {
        $this->ligado = true;
    }

    public function desligar()
    {
        $this->ligado = false;
    }

    public function acelerar()
    {
        if($this->ligado)
        $this->velocidade += 10;
    }
    public function frear()
    {
        $this->velocidade -= 10;
        if($this->velocidade < 0)
        $this->velocidade = 0;
    }
    public function getVelocidade()
    {
        return $this->velocidade;
    }
}
$meu_carro = new Veiculo;
$meu_carro->desligar();
$meu_carro->ligar();
$meu_carro->acelerar();
$meu_carro->acelerar();
echo $meu_carro->getVelocidade();