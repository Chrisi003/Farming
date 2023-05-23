<?php
require('../Database.php');
$db =  new Database();

if(isset($_POST['add_product'])){
    try{
        $name = $_POST["name"];
        $image = $_POST["image"];
        
        $stmt = $db->conn->prepare('INSERT INTO product (name, image) VALUES (:name, :image)');
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':image', $image);
        $stmt->execute();
        header('Location: ../../admin.php');
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
}
?>