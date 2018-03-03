<?php
    //classe que cria um usuário
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

    //Classe que descreve o tipo de matéria relacionada com as questões
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


    // Classe que nomeia uma instituição formadora de concurso
    class Instituicao{
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



    // classe que dita a descrição de informações básicas de uma questão
    class Descricao{
         private $codigo;
         private $anoDeLancamento;
         private $instituicao;
         private $nivel;
         private $disciplina;

         function __construct($cod,$ano, $banca, $nivel, $disciplina){
              $this->anoDeLancamento = $ano;
              $this->instituicao = $banca;
              $this->nivel = $nivel;
              $this->disciplina = $disciplina;
              $this->codigo = $cod;
         }
         public function getcodigo(){
            return $this->codigo;
         }

         public function setCodigo($cod){
              $this->codigo  = $cod;
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


    // Recebe o gabarito da alternativa correta de uma questão e a resposta marcada pelo usuário
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


    // classe que cria um objeto Questão
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

    interface Texto{

        public function getTexto();

        public function setTexto($texto);

    }


    // classe que implementa a interface Texto
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


    // classe que implementa a interface Texto representado por imagem
    class TextoImagem implements Texto{
        private $imagem;
        public function __construct($caminhoDaImagem){
            $this->imagem = $caminhoDaImagem;
        }

        public function getTexto(){
            return $this->imagem;
        }

        public function setTexto($caminhoDaImagem){
            $this->imagem = $caminhoDaImagem;
        }
    }


    // classe concreta que cria um objeto de Questao do tipo Verdadeiro ou Falso
    class CertoErrado extends Questao{

        public function __construct($codigo,$descricao,$assertiva){
            //funciona igual o super do java
             parent::__construct($codigo, $descricao, $assertiva);
        }

    }


    // classe que cria as afirmativas para uma questão de Multipla escolha
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

    // Classe que cria um objeto de Questão do tipo Multipla Escolha
    class MultiplaEscolha extends Questao{
        private $afirmativa;
        function __construct($codigo,$descricao,$assertiva,$afirmativa){

             parent::__construct($codigo, $descricao, $assertiva);
             if($afirmativa instanceof Afirmativas){
                    $this->afirmativa = $afirmativa;
             }
        }
    }

    // classe que cria um objeto simulado
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


    // classe que gera uma lista contendo vários simulados
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

?>
