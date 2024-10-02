<?php 
session_start();
require_once "conectdb.php";
$text = $_POST['comm'];
$postid = $_POST['id'];
$userid = $_SESSION['id'];
print_r($_POST);
$sql = mysqli_query($conn, "INSERT INTO `comment` (`id_post`, `id_user`, `content`) VALUES ('$postid', '$userid', '$text')") ;

?>