<?php

    class BoasVindas{

        private $nome;
        private $sobrenome;

        public function setNome($nome,$sobrenome){
            return $this->nome = $nome;
            return $this->sobrenome = $sobrenome;
        }

        public function getName(){
            return $this->nome;
        }
    }

    $objNome = new BoasVindas();
    $objNome->setNome("Leonardo","Souza");
    echo "Olá, ".$objNome->getName();

?>