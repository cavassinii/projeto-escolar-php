<?php
    namespace MODEL;
    class Aluno{
        private ?int $id;
        private ?string $nome;
        private ?string $nascimento;
        private ?string $endereco;
        private ?string $cpf;
        private ?string $email;

        public function __construct() { }

        public function getId(){
            return $this->id;
        }
        public function setId(int $id){
            $this->id = $id;
        }
        
        public function getNome(){
            return $this->nome;
        }
        public function setNome(string $nome){
            $this->nome = $nome;
        }

        public function getNascimento(){
            return $this->nascimento;
        }
        public function setNascimento(string $nascimento){
            $this->nascimento = $nascimento;
        }

        public function getEndereco(){
            return $this->endereco;
        }
        public function setEndereco(string $endereco){
            $this->endereco = $endereco;
        }

        public function getCpf(){
            return $this->cpf;
        }
        public function setCpf(string $cpf){
            $this->cpf = $cpf;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail(string $email){
            $this->email = $email;
        }
    }

?>