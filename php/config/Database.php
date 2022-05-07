<?php
    class Database{
        // DB params
        private $host = '127.0.0.1';
        private $db_name =  'data_shop';
        private $username = 'root';
        private $password = 'zerotwo002';
        private $conn;
        // DB connect
        public function connect(){
            $this-> conn = null;
            try{
                $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name,$this->username,$this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo "Error connecting: ".$e->getMessage();
                
            }
            return $this->conn;
        }
    }
?>