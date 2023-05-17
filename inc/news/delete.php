<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['delete_news'])){
    try{
        $id = $_POST["delete_news"];
        $sql = $sql = 'DELETE FROM news WHERE id ='.$id;
        $db->conn->exec($sql);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>