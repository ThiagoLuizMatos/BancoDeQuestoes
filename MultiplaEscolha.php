<?php
class MultiplaEscolha extends Questao{
        private $afirmativa;
        function __construct($codigo,$descricao,$assertiva,$afirmativa){

             parent::__construct($codigo, $descricao, $assertiva);      
             if($afirmativa instanceof Afirmativas){
                    $this->afirmativa = $afirmativa;
             }    
        }
    }
