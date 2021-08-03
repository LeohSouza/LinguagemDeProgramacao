<?php

    class Palavra{
        private $palavra;

        public function setPalavra($palavra){
            $this -> palavra = $palavra;
        }

        public function getPalavra(){
            return $this-> palavra;
        }
    }

    $objPalavra = new Palavra();
    $objPalavra -> setPalavra("Pamanho");

    echo strrev($objPalavra -> getPalavra());

?>