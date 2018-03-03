<?php
class Disciplina{
        private $codigo;
        private $nome;

        function __construct($codigo, $nome){
            $this->codigo = $codigo;
            $this->nome = $nome;
        } 

        function getCodigo(){
            return $this->codigo;
        }

        function setCodigo($codigo){
            $this->codigo =$codigo;
        }

        function getNome(){
            return $this->nome;
        }

        function setNome($nome){
            $this->nome = $nome;
        }
    }
?>
