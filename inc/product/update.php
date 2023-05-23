<?php
require('../Database.php');
$db =  new Database();

if(isset($_POST['rename_product']) && isset($_POST["name"])){
    try{
        $id = $_POST['id'];
        $name = $_POST["name"];
        $image = $_POST["image"];
        
        $stmt = $db->conn->prepare('UPDATE product SET name = :name, image = :image WHERE id = :id');
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        header('Location: ../../admin.php');
        exit;
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
}
?>