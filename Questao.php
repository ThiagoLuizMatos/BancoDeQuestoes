<?php
abstract class Questao{
         private $codigo;
         private $texto = [];
         private $assertiva;
         private $descricao;     

         public function __construct($codigo,$descricao,$assertiva){
             $this->codigo = $codigo;
             $this->assertiva = $assertiva;
             $this->descricao = $descricao;    
         }   

         public function getCodigo(){
               return $this->codigo; 
         }

         public function setCodigo($codigo){
               $this->codigo = $codigo; 
         }

         public function addTexto($texto){
              $this->texto[] = $texto;   
         }

         public function getTexto(){
             return $this->texto;
         }

         public function excluirTexto($indice){
                for($i=0; $i < count($this->texto); $i++){
                   if($i == $indice){
                       unset($this->texto[$i]);
                       return true; 
                   } 
                }   
                return false;
         }

         public function getDescricao(){
             return $this->descricao;
         }

         public function setDescricao($descricao){
                $this->descricao = $descricao;
         }

    }
