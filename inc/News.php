<?php
    class News{
        public $db;
        function __construct()
        {
            $this->db = new Database();
        }
        function get_news(){
            try{
                $query =  $this->db->conn->query("SELECT * FROM news");
                $news = $query->fetchAll(PDO::FETCH_OBJ);
                return $news;

              }catch(PDOException $e){
                print_r($e->getMessage());
            }   
        }
    }
    $News = new News();
    
?>