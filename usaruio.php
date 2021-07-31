<?php
    class usaruio {
        private $nomecomp;
        private $username;
        private $senha;
        private $email;
        
        function __construct($nomecomp, $username, $email, $senha){
            $this->nomecomp = $nomecomp;
            $this->username = $username;
            $this->email = $email;
            $this->senha = $senha;
        }

        public function getNomeComp(){
            return $this->nomecomp; 
        }
        public function setNomeComp($v){
            return $this->nomecomp = $v;
        }

        public function getUserName(){
            return $this->username; 
        }
        public function setUserName($v){
            return $this->username = $v;
        }

        public function getSenha(){
            return $this->senha; 
        }
        public function setSenha($v){
            return $this->senha = $v;
        }

        public function getEmail(){
            return $this->email; 
        }
        public function setEmail($v){
            return $this->email = $v;
        }
    }
?>