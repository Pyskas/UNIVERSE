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
    <form method="POST" >
        <input type="text" name="comment" id="">
        <input type="submit">
        <?php 
session_start();
require_once "conectdb.php";
$text = $_POST['comment'];
$postid = $_GET['id'];
$userid = $_SESSION['id'];
print_r($_GET);
$sql = mysqli_query($conn, "INSERT INTO `coment` (`com_text`, `user_id`, `post_id`) VALUES ('$text', '$userid', '$postid')") ;

?>
    </form>
   </section>
</body>
</html>