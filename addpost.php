<?php
if (isset($_POST["title"]) && isset($_POST["text"]) && isset($_POST["category_id"]) && isset($_POST["statusnews_id"])) {
      
      require_once "conectdb.php";
  
      $namepost = $conn->real_escape_string($_POST["title"]);
      $text = $conn->real_escape_string($_POST["text"]);
      $category_id = $conn->real_escape_string($_POST["category_id"]);
      $status_id = $conn->real_escape_string($_POST["status_id"]);

      $newproduct = mysqli_query($conn,"INSERT INTO `post`(`title`, `text`, `category_id`, `statusnews_id`) VALUES ('$title','$text','$category_id','$status_id')");
      if($newproduct){
        echo "<script>
        alert(\"Успешно добавлен пост!\");
        location.href='adminProduct.php'
        </script>";
      }

}

      ?>