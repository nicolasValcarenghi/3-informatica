<?php
class Quadriciclo extends Veiculo {

    public function __construct(){
        $this->rodas = 4;
    }

    public function acelerar() {
    if($this->ligado == true)
     $this->velocidade += 5;
    }
}