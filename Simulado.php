<?php
class Simulado{
        private $codigo=null;
        private $questoes=Array();
        private $autor;
        private $dataDeCriacao;
      
        function __construct($codigo,$autor){
            $this->codigo = $codigo;
            $this->autor = $autor;
            $this->gerarData();    
        }

        public function addQuestao($questao){
            if($questao instanceof Questao){
                $this->questoes[] = $questao;
                return true;    
            }
            return false;
        }

        public function removerQuestao($codigo){
            for($i=0; $i < count($this->questoes); $i++){
                if($codigo == $this->questoes[$i].getCodigo()){
                      unset($this->questoes[$i]);
                      return true;  
                }
            }
            return false;
        }

        public function getQuestoes(){
            return $this->questoes;
        }

        public function getQtdQuestao(){
            return count($this->questoes);
        }

        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($codigo){
            $this->codigo =$codigo; 
        }

        public function gerarData(){
            $this->dataDeCriacao = date("y-m-d");
        }

        public function setData($data){
            $this->dataDeCriacao = $data;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function getData(){
            return $this->dataDeCriacao;
        }

    }
