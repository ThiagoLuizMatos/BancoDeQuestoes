<?php

class Assertiva{
        private $afirmativaCorreta;
        private $afirmativaMarcada =null;

        public function __construct($gabarito){
          $this->afirmativaCorreta = $gabarito;
        }

        public function getAfirmativaCorreta(){
            return $this->afirmativaCorreta;
        }

        public function getAfirmativaMarcada(){
            return $this->afirmativaMarcada;
        }

        public function setAfirmativaMarcada($resposta){
            $this->afirmativaMarcada =$resposta;
        }
    }