<?php
class Descricao{
         private $anoDeLancamento;
         private $instituicao;
         private $nivel;
         private $disciplina;

         function __construct($ano, $banca, $nivel, $disciplina){
              $this->anoDeLancamento = $ano;
              $this->instituicao = $banca;
              $this->nivel = $nivel;
              $this->disciplina = $disciplina;  
         }
      
         public function getAnoDeLancamento(){
             return $this->anoDeLancamento;
         }

         public function getInstituicao(){
             return $this->instituicao;
         }

         public function getNivel(){
             return $this->nivel;
         }

         public function getDisciplina(){
             return $this->disciplina;
         }

         public function setAnoDeLancamento($ano){
             $this->anoDeLancamento = $ano;
         }

         public function setInstituicao($banca){
             $this->instituicao = $banca;
         }

         public function setNivel($nivel){
             $this->nivel = $nivel;
         }

         public function setDisciplina($disciplina){
             $this->disciplina = $disciplina;
         }

    }