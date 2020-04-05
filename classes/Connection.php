<?php
    class Connection {
        protected $host, $dbname, $user, $pass, $charset, $msgErro, $pdo;

        public function __construct($dbname) {
            $this->setHost('localhost');
            $this->setDbname($dbname);
            $this->setCharset('utf8');
            $this->setUser('root');
            $this->setPass('');
            try {
                $this->setPdo(new PDO('mysql:host='.$this->getHost().';dbname='.$this->getDbname().';
                charset='.$this->getCharset(),$this->getUser(),$this->getPass()));        
            } catch (PDOException $e) {
                $this->setMsgErro($e->setMessage()); 
            } 
        }
        
        public function getHost(){
            return $this->host; 
        }
        public function getDbname(){
            return $this->dbname; 
        }
        public function getUser(){
            return $this->user; 
        }
        public function getPass(){ 
            return $this->pass;
        }
        public function getCharset(){ 
            return $this->charset; 
        }    
        public function getMsgErro(){
            return $this->msgErro;
        }
        public function getPdo(){
            return $this->pdo; 
        }
        public function setMsgErro($msgErro){
            $this->msgErro = $msgErro;
        }
        public function setCharset($charset){
            $this->charset = $charset; 
        }
        public function setHost($host){
            $this->host = $host; 
        }
        public function setDbname($dbname){
            $this->dbname = $dbname; 
        }
        public function setUser($user){
            $this->user = $user;
        }
        public function setPass($pass){
            $this->pass = $pass; 
        }
        public function setPdo($pdo){
            $this->pdo = $pdo; 
        }    
        public function disconnect(){
            $this->setPdo(null); 
        }
    }
