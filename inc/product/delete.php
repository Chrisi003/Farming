<?php
require('../Database.php');
$db =  new Database();

if(isset($_POST['delete_product'])){
    try{
        $id = $_POST["delete_product"];
        
        $stmt = $db->conn->prepare('DELETE FROM product WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        header('Location: ../../admin.php');
        exit;
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
}
?>