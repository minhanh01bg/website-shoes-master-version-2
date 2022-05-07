<?php
    class post_order{
        private $conn;
        private $table = "orders";

        public $id;
        public $user_id;
        public $name;
        public $address;
        public $email;
        public $number;
        public $total_products;
        public $total_price;
        public $placed_on;
        public $payment_status;
        public $method;
        public function __construct($db){
            $this->conn = $db;
        }

        public function read(){
            $query ="SELECT * FROM ".$this->table;
            $stmt = $this->conn->prepare($query);
            if($stmt->execute()){
                return $stmt;
            }
        }
    }
?>