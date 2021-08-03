<?php

    //estrutura de dados
    class nomeCompleto{

        //atributos
        private $nome;
        private $sobrenome;

        public function setNomeCompleto($nome,$sobrenome){
            $this -> nome = $nome;
            $this -> sobrenome = $sobrenome;
        }

        public function getNome(){
            return $this -> nome;
        }

        public function getSobrenome(){   
            return $this -> sobrenome;
        }

    }

    //instanciando objeto
    $objNome = new nomeCompleto();
    $objNome -> setNomeCompleto("leonardo da silva","Souza");


    echo strtoupper($objNome->getSobrenome()), ", " .ucwords($objNome->getNome());

?>