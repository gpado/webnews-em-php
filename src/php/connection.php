<?php
    date_default_timezone_set('America/Sao_Paulo');

    class Connection extends PDO{
        private $host = "127.0.0.1";
        private $user = "root";
        private $password = "";
        private $db = "webnews";

        public function __construct(){
            parent::__construct("mysql:host=$this->host; dbname=$this->db", "$this->user", "$this->password");
        }
    }

    try{
        $conn = new Connection();
        echo("<script>console.log('Connection established!')</script>");

    }catch(PDOException $error){
        return "Error to connect with the server - ".$error->getMessage();
    }
?>