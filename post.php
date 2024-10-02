<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="/css/css.css">
    <link rel="stylesheet" href="/css/container.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
        
   <?php 
   include "component/header.php";
   ?>
   <section>
    <form method="POST" action="/comment.php">
        <input type="text" name="comm" id="">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit">
    </form>
   </section>
   <section>
    <?php
require_once "conectdb.php";
    
    session_start();
    $user = $_GET['id']; 
            $sql = mysqli_query($conn, "SELECT * FROM comment INNER JOIN users ON users.id_user =  comment.id_user WHERE id_post = '$user' ");
            $sql = mysqli_fetch_all($sql);
            foreach($sql as $row){


    
    ?>
<p><?=$row[0]?></p>
<?php 
             }
?>
   </section>
</body>
</html>