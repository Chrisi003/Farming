<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['news'])){
 
    $data = [
        'news_email' => $_POST["news_email"],
    ];
    try{
        $query = "INSERT INTO news (news_email) VALUES (:news_email)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }   
}
?>