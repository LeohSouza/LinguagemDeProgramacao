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

        public function getSobrenome(){
            return $this -> sobrenome;
        }

    }

    //instanciando objeto
    $objNome = new nomeCompleto();
    $objNome -> setNomeCompleto("Leonardo","Souza");


    echo "Sobrenome é: ".$objNome->getSobrenome();

?>