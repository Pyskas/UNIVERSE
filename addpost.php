<?php
session_start();
require_once "conectdb.php";
if (!empty($_POST["title"]) && !empty($_POST["text"])) {
      
    
  
    $namepost = $conn->real_escape_string($_POST["title"]);
    $text = $conn->real_escape_string($_POST["text"]);
    $category_id = ($_POST["category_id"]);
    print_r($_POST);
    $status_id = 1;
    $id_user = $_SESSION['id'];
    print_r($id_user);
    $newproduct = mysqli_query($conn, "INSERT INTO post(id_user, category_id, statusnews_id, title, text) VALUES ('$id_user', '$category_id', ' $status_id', '$namepost', '$text')");
 echo $conn->error;
}
header('Location: account.php');
