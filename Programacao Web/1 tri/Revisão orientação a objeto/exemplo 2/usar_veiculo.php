<?php
require('veiculo.php');
require('quadriciclo.php');
$q = new Quadriciclo;
$q->ligar();
$q->acelerar();
echo $q->getVelocidade();