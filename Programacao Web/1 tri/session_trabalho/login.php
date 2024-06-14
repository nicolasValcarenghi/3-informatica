<?php

session_start();

$usuario = $_POST["usuario"];
$_SESSION['indice_novo'] = '$usuario';


echo $_SESSION['indice_novo'];