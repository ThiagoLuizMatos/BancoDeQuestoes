<?php
interface Texto{

        public function getTexto();

        public function setTexto($texto);

    }


    // classe que implementa a interface Texto 
    class TextoEscrito implements Texto{
        private $texto;
        public function __construct($texto){
             $this->texto = $texto;   
        }

        public function getTexto(){
            return $this->$texto;
        }

        public function setTexto($texto){
            $this->texto = $texto;
        }
    }
