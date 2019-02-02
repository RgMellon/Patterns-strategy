<?php
    
    require ('Imposto.php');

    class ISS implements Imposto {
        
        public function calcula($orcamento) {
            return $orcamento->getValor() * 0.5;
        }
    }