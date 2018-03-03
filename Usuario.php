<?php
class Usuario{
        private $codigo;
        private $nome;
        private $senha;
        private $email;
        private $perfil = null;

        public function __construct($codigo, $nome, $senha, $email){
             $this->codigo = $codigo;
             $this->nome = $nome;
             $this->senha = $senha;
             $this->email = $email;   
        }

        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        } 

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha =$senha;
        }

        public function getEmail(){
             return $this->email;   
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getPerfil(){
            return $this->perfil;
        } 

        public function setPerfil($perfil){
            $this->perfil = $perfil;
        }
    }
?>
