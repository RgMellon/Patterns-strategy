<?php

    require 'Orcamento.php';
    require 'ISS.php';
    require ('CalculadoraDeImpostos.php');

    $o = new Orcamento(300);
    $iss = new ISS();

    $calc = new CalculadoraDeImpostos();
    echo $calc->calcula($o, $iss);
