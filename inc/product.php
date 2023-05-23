<?php
    require_once ('Database.php');
    class Product{
        public $db;
        function __construct()
        {
            $this->db = new Database();
        }
        function get_product(){
            try{
                $query =  $this->db->conn->query("SELECT * FROM product");
                $product = $query->fetchAll(PDO::FETCH_OBJ);
                return $product;

              }catch(PDOException $e){
                print_r($e->getMessage());
            }   
        }
    }
    $Product = new Product();
    
?>