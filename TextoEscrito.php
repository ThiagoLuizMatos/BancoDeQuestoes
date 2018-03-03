<?php
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
