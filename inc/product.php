<?php
class Product {
    public $db;

    function get_product() {
        $this->db = new Database();
        try {
            $query = $this->db->conn->query("SELECT * FROM product");
            $product = $query->fetchAll(PDO::FETCH_OBJ);
            return $product;
        } catch(PDOException $e) {
            print_r($e->getMessage());
        }
    }
}

$Product = new Product();
?>