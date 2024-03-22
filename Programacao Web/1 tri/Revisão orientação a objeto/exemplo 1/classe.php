<?php
//exemplo classe.php

class Carro
{
    //metodo é função  - propriedade é variavel
    private $velocidade;

    public function acelerar()
    {
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
$meu_carro = new Carro;
$meu_carro->frear();
$meu_carro->frear();
echo $meu_carro->getVelocidade();