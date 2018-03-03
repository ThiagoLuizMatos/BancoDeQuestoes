<?php
class Afirmativas{
        private $a;
        private $b;
        private $c;
        private $d;
        private $e;

        public function __construct($a, $b, $c, $d, $e){
            $this->a = $a; $this->b =$b; $this->c = $c; $this->d = $d; $this->e = $e;
        }

        public function getA(){
            return $this->a;
        }

        public function setA($a){
            $this->a = $a;
        }

        public function getB(){
            return $this->b;
        }

        public function setB($b){
            $this->b = $b;
        }

        public function getC(){
            return $this->c;
        }

        public function setC($c){
            $this->c =$c;
        }

        public function getD(){
            return $this->d;
        }

        public function setD($d){
            $this->d = $d;
        }

        public function getE(){
            return $this->e;
        }

        public function setE($e){
            $this->e = $e;
        }

    }
