<?php
class BuscadorDeSimulados {
        private $simulados=Array();
      
        public function addSimulado($simulado){
            $this->$simulados[] = $simulado;
        } 

        public function getSimulados(){
            return $this->simulados;
        }

        public function getSimulado($codigo){
              for($i=0; $i < count($this->simulados); $i++){
                    if($codigo == $this->simulados[$i].getCodigo()){
                         return $this->simulados[$i];   
                    }
              }  
              return null;
        }

        public function removerSimulado($codigo){

            for($i=0; $i < count($this->simulados); $i++){
                if($codigo == $this->simulados[$i].getCodigo()){
                      unset($this->simulados[$i]);
                      return true;  
                }
            }
            return false;

        }
    }